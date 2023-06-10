<?php

namespace App\Http\Livewire\Entity;

use App\Models\Entity;
use Livewire\Component;
use App\Models\District;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EntityComponent extends Component
{
    use WithFileUploads;
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



    public function mount(District $distict){


        $this->district = $distict;
     }

    public function render()
    {

        if(auth()->user()->roles->first()->name == 'super-admin'|auth()->user()->roles->first()->name == 'admin'){

        }
        if(strlen($this->search) > 0){
            return view('livewire.entity.component',
            ['info'=>Entity::where('name', 'like', '%'.$this->search.'%')
            ->where('type', 'like', '%'.$this->search.'%')
            ->where('email', 'like', '%'.$this->search.'%')
            ->where('phone', 'like', '%'.$this->search.'%')
            ->where('short_name', 'like', '%'.$this->search.'%')
            ->where('slog', 'like', '%'.$this->search.'%')
            ->where('name', 'like', '%'.$this->search.'%')

            ->paginate($this->pagination)]);
        }else{
            if(auth()->user()->roles->first()->name == 'super-admin'){
                $info =  Entity::paginate($this->pagination);
             }else if(auth()->user()->roles->first()->name == 'admin'){
                $info = Entity::where('id',auth()->user()->entity_id)->paginate($this->pagination);
             }else{
                abort(401);
             }
         ;
        }

        return view('livewire.entity.component',[
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

        $this->upload_image='';
        $this->selected_id = null;
        $this->action = 1;
        $this->search='';
        $this->district_id = 0;
    }

    public function edit($id)
    {
        $record = Entity::findOrFail($id);
        $this->name=$record->name;
        $this->email=$record->email;
        $this->phone=$record->phone;
        $this->upload_image=$record->upload_image;
        $this->district_id=$record->district_id;
        $this->selected_id =$id;
        $this->action = 2;
    }


    public function storeOrUpdate()
    {

        // $this->validate([
        //     'name' => 'required|min:3',
        //     'type' => 'required|min:3',
        //     'short_name' => 'required|min:3',
        //     'description' => 'required|min:10',
        //     'slog' => 'required|min:2',
        //     'phone' => 'required|min:9|max:13',
        //     'email'=>'required|string|unique:entities,email',
        //     'upload_image' => 'required|string',
        //     'district_id' => 'required|integer',
        // ]);


        if($this->selected_id<=0){



            if($this->upload_image){

                    if (preg_match('/^data:image\/(\w+);base64,/', $this->upload_image)) {
                      $value = substr($this->upload_image, strpos($this->upload_image, ',') + 1);
                      $value = base64_decode($value);
                      $imageName = time()  . '.png';
                      $val = Storage::disk('company')->put($imageName, $value);
                      $path = public_path('storage/uploads/company',$imageName);

                         $this->upload_image = 'public' . $imageName;

                         $info = Entity::create([
                            'name' => $this->name,
                            'type' => $this->type,
                            'phone' => $this->phone,
                            'email' => $this->email,
                            'user_id' => Auth::user()->id,
                            'upload_image' =>$imageName,
                            'district_id' =>$this->district_id,

                        ]);
                    }
            }
        }else{

            $info = Entity::find($this->selected_id);
            $info->update([
                'name' => $this->name,
                'type' => $this->type,
                'short_name' => $this->short_name,
                'description' => $this->description,
                'phone' => $this->phone,
                'email' => $this->email,
                'slog' => $this->slog,
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
            $info = Entity::find($id);
            $info->delete();
            $this->resetInput();
            session()->flash('msgOk', 'Registo deletedo com sucesso!');
        }else{
            session()->flash('error', 'Falha ao deletar Registo!');
        }
    }

    protected  $listeners = [
        'deletedCompany'=>'distrory',
        'fileUploaded'=>'handleFileUpload'
    ];

    public function handleFileUpload($imageData)
    {
        $this->upload_image= $imageData;
    }
}
