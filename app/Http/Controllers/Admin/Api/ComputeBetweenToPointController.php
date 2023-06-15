<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Container;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ComputeBetweenToPointController extends Controller
{
    public $data;

    public function isInCircle(Request $request)
    {
        $base = Container::where('status_id', 2)->orWhere('status_id', 4)->get();
        $result = false;
        foreach ($base as $b) {
            if (sqrt(pow($request->lat - $b->lat, 2) + pow($request->lng - $b->lng, 2)) <= 0.01) {
                $this->data[] = $b;
            }
        }

        return $this->data;
    }

    public function recevedImage(Request $request)
    {
        $image = $request->image64;

        if ($this->isInCircle($request)) {
            if ($image) {
                foreach ($this->data as $key => $c) {
                    if ($c->status_id == 4) {
                        $this->convert($request, $image, 2, $c);

                        return response('link da image salvo com sucesso 4 ...', 200);
                    } elseif ($c->status_id == 2) {
                        $this->convert($request, $image, 2, $c);

                        return response('link da image salvo com sucesso 2');
                    } else {
                        return response('error impossivel salvar a image ...', 404);
                    }
                }
            } else {
                return response('A requisiçã não possui imagem ...  ');
            }
        } else {
            $image = str_replace('data:image/png;base64', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = time().'.png';
            File::put(public_path('storage/uploads/point/'.$imageName), base64_decode($image));
            $file = Image::create(['image' => $imageName, 'lat' => $request->lat, 'lng' => $request->lng]);

            return response('posicao detectada', 200);
        }
    }

 public function convert(Request $request, $image, $status, $c)
 {
     $image = str_replace('data:image/png;base64', '', $image);
     $image = str_replace(' ', '+', $image);
     $imageName = time().'.png';
     File::put(public_path('storage/uploads/images/'.$imageName), base64_decode($image));
     $file = Image::create(['image' => $imageName, 'lat' => $request->lat, 'lng' => $request->lng]);
     $c->images()->syncWithoutDetaching($file);
     $c->status_id = $status;
     $c->update();
 }
}
