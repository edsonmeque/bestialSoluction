<?php

namespace App\Http\Livewire\Buind;

use App\Models\Buind;
use App\Models\District;
use Livewire\Component;
use Livewire\WithPagination;

class BuindComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name;
    public $district_id;
    public $district;
    public $selected_id, $search;
    public $action = 1;
    public $pagination = 5;

    public function mount(District $district){

        $this->district = $district;
    }

    public function render()
    {
         if(auth()->user()->roles->first()->name == 'super-admin'){
            if(strlen($this->search) > 0){
                return view('livewire.buind.component',[
                    'info'=>
                    Buind::where('name','like'.'%'.$this->search.'%')->paginate($this->pagination)
                ]);
            }else{
                $info = Buind::paginate($this->pagination);
            }

            return view('livewire.buind.component',[
                'info' => $info
            ]);
         }else{
             $info = District::where('id',auth()->user()->district_id)->paginate(5);
             return view('livewire.district.component',[
                 'info' => $info
             ]);
         }
    }


    public function updateSearch()
    {
        $this->gotoPage(1);
    }

    public function doAction($action)
    {   $this->resetInput();

        $this->action = $action;
    }


    public function resetInput()
    {
        $this->name='';
        $this->selected_id = null;
        $this->action = 1;
        $this->search='';
        $this->district_id = 0;
    }

    public function edit($id)
    {
        // if(auth()->user()->roles->first()->name == 'super-admin'){
        $record = Buind::findOrFail($id);
        $this->name=$record->name;
        $this->district_id=$record->district_id;
        $this->selected_id =$id;
        $this->action = 2;
    // }else{
    //     abort(401);
    // }
    }


    public function storeOrUpdate()
    {
        // if(auth()->user()->roles->first()->name == 'super-admin'){
        $this->validate([
            'name' => 'required|min:3',
            'district_id' => 'required|integer',
        ]);

        if($this->selected_id>0){
            $exists = Buind::where('name',$this->name)
                               ->where('id','<>',$this->selected_id)
                               ->select('name')->get();
            if($exists->count() > 0) {
                 session()->flash('msg_error','Já  existe registo com mesmo nome');
                 $this->resetInput();
                return;
            }
        }else{

            $exists = Buind::where('name',$this->name)->select('name')->get();
            if($exists->count() > 0) {
                  session()->flash('msg_error','Já  existe registo com mesmo nome');
                 $this->resetInput();
                return;
            }
        }

        if($this->selected_id<=0){


            $info = Buind::create([
                'name' => $this->name,
                'district_id' =>$this->district_id,
            ]);
        }else{

            $info = Buind::find($this->selected_id);
            $info->update([
                'name' => $this->name,
                'district_id' => $this->district_id,
            ]);
        }

        if($this->selected_id){
            session()->flash('success', 'Successfully selected_id');
        }else{
            session()->flash('success', 'Successfully selected_id');
        }

        $this->resetInput();
    // }else {
    //     abort(401);
    // }
    }


    public function distrory($id)
    {
        // if(auth()->user()->roles->first()->name == 'super-admin'){
        if($id){
            $info = Buind::find($id);
            $info->delete();
            $this->resetInput();
            session()->flash('success', 'Successfully selected_id');
        }else{
            session()->flash('success', 'Successfully selected_id');
     }
    // }else{
        //     abort(401);
        // }
    }


    protected  $listeners = [
        'deletedBuind'=>'distrory'
    ];


}
