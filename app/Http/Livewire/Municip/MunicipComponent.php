<?php

namespace App\Http\Livewire\Municip;

use App\Models\Buind;
use App\Models\Municip;
use Livewire\Component;
use App\Models\District;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class MunicipComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // variables for entity
    public $name;
    public $phone;
    public $email;
    public $tags;
    public $upload_image;
    public $address;
// variables for entity relationships
    public $district;
    public $district_id;

    public $bairros = null;
    public $arra =[];
// variables for  helper functions
    public $selected_id, $search;
    public $action = 1;
    public $pagination = 5;

    public function mount(District $distict,Buind $bairro){

        $this->district = $distict;
        $this->bairros =$bairro;
     }

    public function render()
    {
        if(strlen($this->search) > 0){
            return view('livewire.municip.component',
            ['info'=>Municip::where('name', 'like', '%'.$this->search.'%')
            ->where('email', 'like', '%'.$this->search.'%')
            ->where('phone', 'like', '%'.$this->search.'%')
            ->where('address', 'like', '%'.$this->search.'%')
            ->where('tags', 'like', '%'.$this->search.'%')
            ->paginate($this->pagination)]);
        }else{
            if(auth()->user()->roles->first()->name == 'super-admin'){
                $info =  Municip::paginate($this->pagination);
             }else if(auth()->user()->roles->first()->name == 'admin'){
                $info = Municip::where('id',auth()->user()->municip_id)->paginate($this->pagination);
             }else{
                abort(401);
             }
         ;
        }

        return view('livewire.municip.component',[
            'info' => $info
        ]);
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
        $this->phone='';
        $this->email='';
        $this->tags='';
       // $this->log='';
        $this->address='';
        $this->selected_id = null;
        $this->action = 1;
        $this->search='';
        $this->district_id = 0;
    }

    public function edit($id)
    {
        $record = Municip::findOrFail($id);
        $this->name=$record->name;
        $this->tags=$record->tags;
        $this->email=$record->email;
        $this->phone=$record->phone;
        $this->address=$record->address;

        $this->district_id=$record->district_id;
        $this->selected_id =$id;
        $this->action = 2;
    }


    public function storeOrUpdate()
    {
        $this->validate([
            'name' => 'required|min:3',
            'address' => 'required',
            'tags' => 'required',
            'phone' => 'required|min:9|max:13',
            'email'=>'required',
            'district_id' => 'required|integer',
        ]);


        if($this->selected_id<=0){

                         $info = Municip::create([
                            'name' => $this->name,
                            'tags' => $this->tags,
                            'phone' => $this->phone,
                            'email' => $this->email,
                            'address' => $this->address,
                            'user_id' => Auth::user()->id,
                            'district_id' =>$this->district_id,

                        ]);


        }else{

            $info = Municip::find($this->selected_id);
            $info->update([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'address' => $this->address,
                'tags' => $this->tags,
                'user_id' => Auth::user()->id,
                'district_id' =>$this->district_id,
            ]);
        }

        if($this->selected_id)
            $this->emit('msgOk', 'Entidade Actualizado com sucesso!');
        else
            session()->flash('msgOk', 'Entidade Criado com Sucesso!');

        $this->resetInput();
    }


    public function distrory($id)
    {
        if($id){
            $info = Municip::find($id);
            $info->delete();
            $this->resetInput();
            session()->flash('msgOk', 'Registo deletedo com sucesso!');
        }else{
            session()->flash('error', 'Falha ao deletar Registo!');
        }
    }

    protected  $listeners = [
        'deletedMunicip'=>'distrory',
        'fileUploaded'=>'handleFileUpload'
    ];



    public function handleFileUpload($imageData)
    {
        dd($imageData);
        $this->upload_image= $imageData;
    }

}
