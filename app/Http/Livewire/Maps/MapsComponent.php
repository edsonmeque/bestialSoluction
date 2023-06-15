<?php

namespace App\Http\Livewire\Maps;

use App\Models\Container;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MapsComponent extends Component
{
    public $array_container_witdout_image;

    public $array_container_with_image;

    public $array_poitn_with_image;

    public $array_image = null;

    public $image;

    public function render()
    {
        $this->array_container_witdout_image = Container::where('municip_id', Auth::user()->municip_id)->get();
        $this->array_image = Image::select('*')
                 ->leftJoin('container_images', 'images.id', '=', 'container_images.id')->
                 where('container_images.image_id', null)
                    ->get();

        return view('livewire.maps.component', [
            'maps' => $this->array_container_witdout_image,
            'points' => $this->array_image,
        ]);
    }
}
