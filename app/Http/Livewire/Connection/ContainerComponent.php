<?php

namespace App\Http\Livewire\Connection;

use App\Models\Container;
use App\Models\Municip;
use App\Models\ContainerImage;
use Livewire\Component;

class ContainerComponent extends Component
{

    public $selectedMmunicip;
    public $container_id;
    public $municip_id;

    public $municips;

    public $containers = null;
    public $realStateContainers= null;
    public $realStateImagens= null;
    public $imagesList = null;

    public function mount(Municip $municip)
    {

        if(auth()->user()->roles->first()->name == 'super-admin'){
            $this->municips=    $municip->get();
        }else if(auth()->user()->roles->first()->name == 'admin'){

            $this->municips=    $municip->where('id',auth()->user()->municip_id)->get();
        }
        //$this->municips=    $municip->where('id',auth()->user()->municip_id)->get();
    }

     public function filterContainerByMunicip()
     {
        $this->realStateContainers= Container::where('municip_id',$this->municip_id)->first();
     }



     public function filterImagesByContainer()
     {
        $this->realStateImagens  =  $this->realStateContainers->where('id','=',$this->container_id)->first();
        $this->imagesList =  $this->realStateImagens->images()->get();
    }
    public function render()
    {
        return view('livewire.connection.component');
    }



}
