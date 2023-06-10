<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Models\Municip;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class UserComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    // this variable have to be  public
    public $name;
    public $email;
    public $password;
    public $password_confirm;
    public $phone;
    public $status;

    public $municipies;
    public $municip_id;
    public $selected_id, $search;
    public $action = 1;
    public $pagination = 5;

    public function mount( Municip $municip)
    {
        if(auth()->user()->roles->first()->name =='super-admin'){
            $this->municipies = $municip;
        }else{
            $this->municipies = $municip;
        }

    }
    public function render()
    {

        if(strlen($this->search) > 0){
            return view('livewire.user.component',['info'=>User::where('name','like'.'%'.$this->search.'%')
            ->where('email','like'.'%'.$this->search.'%')
            ->where('phone','like'.'%'.$this->search.'%')->paginate($this->pagination)]);
        }else{
            if(auth()->user()->roles->first()->name =='super-admin'){
                $info = User::paginate($this->pagination);
            }else{
                $info = User::where('municip_id',Auth::user()->municip_id )->paginate($this->pagination);
            }
        }
        return view('livewire.user.component',[
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
        $this->email='';
        $this->password='';
        $this->phone='';
        $this->status='';
        $this->selected_id = null;
        $this->action = 1;
        $this->search='';
        $this->municip_id = 0;
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);

        $this->name=$record->name;
        $this->email=$record->email;
        $this->phone=$record->phone;
        $this->password=$record->password;
        $this->status=$record->status;
        $this->municip_id=$record->municip_id;

        $this->selected_id =$id;
        $this->action = 2;
    }

    public function storeOrUpdate()
    {

        // $this->validate([
        //     'name'=>'required|string',
        //     'email'=>'required|string|unique:users,email',
        //     'phone'=>'required|string',
        //     'status'=>'required|string',
        //     'password'=>'required|same:password_confirm',
        //     'password_confirm'=>'required',
        //     'municip_id' =>'required|integer'
        // ]);

        if($this->selected_id>0){
            $exists = User::where('email',$this->name)
                               ->where('id','<>',$this->selected_id)
                               ->select('email')->get();
            if($exists->count() > 0) {
                 session()->flash('msg_error','Já  existe registo com mesmo email');
                 $this->resetInput();
                return;
            }
        }else{

            $exists = User::where('email',$this->name)->select('email')->get();
            if($exists->count() > 0) {
                  session()->flash('msg_error','Já  existe registo com mesmo nome');
                 $this->resetInput();
                return;
            }
        }

        if($this->selected_id<=0){


//d($this->municip_id);
            $info = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'status'=> $this->status,
            'password'=>bcrypt($this->password),
            'municip_id' =>$this->municip_id,

        ]);

        }else{

            $info = User::find($this->selected_id);
            $info->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'status'=>$this->status,
            'password'=>bcrypt($this->password),
            'municip_id' =>$this->municip_id,

            ]);
        }

        if($this->selected_id){
            session()->flash('success', 'Successfully selected_id');
        }else{
            session()->flash('success', 'Successfully selected_id');
        }

        $this->resetInput();
    }

    public function distrory($id)
    {
        if($id){
            $info = User::find($id);
            $info->delete();
            $this->resetInput();
            session()->flash('success', 'Successfully selected_id');
        }else{
            session()->flash('success', 'Successfully selected_id');
        }
    }

    protected  $listeners = [
        'deletedUser'=>'distrory'
    ];
}
