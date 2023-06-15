<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Collect;
use App\Models\Container;
use App\Models\Image;
use App\Models\Municip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ColectController extends Controller
{
    public $data_with_image_container;

    public $data_without_image_container;

    public $data_collect;

    public $status = 5;

    public function alocation(Request $request): bool
    {
        // return $request->all();
        $this->data_without_image_container = Container::where('id', $request->id_container_status_5)
        ->where('municip_id', $request->municip_id)->first();
        if ($this->data_without_image_container->lat == 0 && $this->data_without_image_container->lng == 0 && $this->data_without_image_container->status_id == 5) {
            $this->data_without_image_container->lat = $request->lng;
            $this->data_without_image_container->lng = $request->lat;
            $this->data_without_image_container->status_id = 4;

            return $this->data_without_image_container->update();
        }

        return false;
    }

    public function changeContainer(Request $request)
    {
        $this->data_without_image_container = Container::where('id', $request->id_container_status_5)->where('municip_id', $request->municip_id)->first();

        if ($this->data_without_image_container) {
            $this->data_with_image_container = Container::where('id', $request->id_container_status_2)->where('municip_id', $request->municip_id)->first();

            if ($this->data_with_image_container->municip_id == $this->data_without_image_container->municip_id && $this->data_with_image_container->status_id == 2) {
                foreach ($this->data_with_image_container->images as $i) {
                    $distination = public_path('storage/uploads/images/'.$i->image);

                    if (File::exists($distination)) {
                        File::delete($distination);
                    }
                }

                $this->data_with_image_container->images()->sync([]);
                $this->data_with_image_container->status_id = 5;
                $this->data_with_image_container->update();

                $this->data_collect = new Collect();
                $this->data_collect->container_id = $this->data_with_image_container->id;
                $this->data_collect->lat = $this->data_with_image_container->lat;
                $this->data_collect->lng = $this->data_with_image_container->lng;
                $this->data_collect->user_id = auth()->user()->id;
                $this->data_collect->status_id = 6;
                $this->data_collect->save();

                $this->data_without_image_container->lat = $request->lng;
                $this->data_without_image_container->lng = $request->lat;
                $this->data_without_image_container->status_id = 4;
                $this->data_without_image_container->update();

                return response('OK!, coleta realizada com sucesso!', 200);
            } else {
                response('contentor nao pertence ao mesmo municipio', 404);
            }
        } else {
            response('Nenhum Contentor Vazio Selecionado');
        }
    }

    public function list_container_with_status_5()
    {
        $municips = Municip::where('id', auth('sanctum')->user()->municip_id)->first();

        if (! $municips) {
            return response()->json(['message' => 'Usuario nao associado a um municipio']);
        } else {
            $data = Municip::where('id', auth('sanctum')->user()->municip_id)
              ->with('containers.status', 'containers.images')->get();

            if (! $data) {
                return response()->json(['message' => 'Contentor nao disponivel para Usuario']);
            } else {
                return response()->json($data, 200);
            }
        }
    }

     public function getAllPont()
     {
         return Image::select('*')
         ->leftJoin('container_images', 'images.id', '=', 'container_images.id')->
         where('container_images.image_id')
            ->get();
     }

     public function list_container_with_status()
     {
         $user1 = User::where('municip_id', auth()->user()->municip_id)->first();

         if (! $user1) {
             return response()->json(['message' => 'Usuario nao associado a um municipio']);
         } else {
             $data = Container::with('status', 'municips', 'images')->where('municip_id', $user1->municip_id)->where('status_id', 2)->orWhere('status_id', 4)->orderBy('updated_at', 'desc')->get();
             if (! $data) {
                 return response()->json(['message' => 'Contentor nao disponivel para Usuario']);
             } else {
                 return response()->json($data, 200);
             }
         }
     }
}
