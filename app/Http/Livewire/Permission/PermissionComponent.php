<?php

namespace App\Http\Livewire\Permission;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use PhpParser\Node\Expr\Print_;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;


class PermissionComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $permissionTitle='create', $roleTitle='create', $userSeleted;
    public $tab='roles', $roleSelected;
    public function render()
    {
        $roles = Role::select('*',DB::RAW('0 as checked'))->get();
        $permissions = Permission::select('*',DB::RAW('0 as checked'))->get();

        if($this->userSeleted!=''&&$this->userSeleted!='Selecionar'){
            foreach ($roles as $r) {
                $user = User::find($this->userSeleted);
                $haveRole= $user->hasRole($r->name);
                if($haveRole){
                    $r->checked=1;
                }
            }
        }

        if($this->roleSelected!=''&&$this->roleSelected!='Selecionar'){
            foreach ($permissions as $p) {
                $role = Role::find($this->roleSelected);
                $havePermission= $role->hasPermissionTo($p->name);
                if($havePermission){
                    $p->checked=1;
                }
            }
        }
        if(auth()->user()->roles->first()->name == 'super-admin'){
            $info =  User::select('id','name')->get();
         }else if(auth()->user()->roles->first()->name == 'admin'){
            $info = User::select('id','name')->where('municip_id',Auth::user()->municip_id )->Orwhere('municip_id',0)->get();
         }else{
            abort(401);
         }


        return view('livewire.permission.component',[
            'roles'=>$roles,
            'permissions'=>$permissions,
            'usuarios'=> $info
        ]);
    }

    public function resetInput()
    {
        $this->permissionTitle='create';
        $this->roleTitle='create';
        $this->roleSelected='';
        $this->userSeleted='';
    }

    public function createRole($roleName,$roleId)
    {
        if($roleId)
            $this->updateRole($roleName,$roleId);
        else
            $this->saveRole($roleName);
    }

    public function saveRole($roleName)
    {
       $role = Role::where('name',$roleName)->first();

       if($role){
        $this->emit('msg-errors','Roles ja Existe no sistema');
        return;
       }
       Role::create(['name' => $roleName]);
       $this->emit('msg-ok','Roles criado com sucesso');
       $this->resetInput();
    }

 public function updateRole($roleName,$roleId)
 {
    $role = Role::where('name',$roleName)->where('id','<>',$roleId)->first();

       if($role){
        $this->emit('msg-errors','Roles ja Existe no sistema');
        return;
       }
    $role = Role::find($roleId);
    $role->name = $roleName;
    $role->save();
    $this->emit('msg-ok','Roles Actualizado com sucesso');
    $this->resetInput();

 }

public function destroyRole($roleId)
{
    $role =Role::find($roleId)->delete();
    $this->emit('msg-ok','Roles Eliminado com sucesso');
}

public function AsignarRoles($roleList)
{
    print_r($roleList);

     if($this->userSeleted){
        $user = User::find($this->userSeleted);

        if($user){
            $user->syncRoles($roleList);
            $this->emit('msg-ok','Roles assinado Corretamente');
            $this->resetInput();
        }
     }
}

protected $listeners =[
    'destroyRole'=>'destroyRole',
    'destroyPermission'=>'destroyPermission',
    'createRole'=>'createRole',
    'createPermission'=>'createPermission',
    'AsignarRoles'  => 'AsignarRoles',
    'AsignerPermissions' => 'AsignerPermissions',
];



public function createPermission($permissionName,$permissionId)
    {
        if($permissionId)
            $this->updatePermission($permissionName,$permissionId);
        else
            $this->savePermission($permissionName);
    }

    public function savePermission($permissionName)
    {
       $permission = Permission::where('name',$permissionName)->first();

       if( $permission){
        $this->emit('msg-errors','Roles ja Existe no sistema');
        return;
       }
       Permission::create(['name' => $permissionName]);
       $this->emit('msg-ok','Roles criado com sucesso');
       $this->resetInput();
    }

    public function updatePermission($permissionName,$permissionId)
 {
    $permission= Permission::where('name',$permissionName)->where('id','<>',$permissionId)->first();

       if($permission){
        $this->emit('msg-errors','Roles ja Existe no sistema');
        return;
       }
    $permission= Permission::find($permissionId);
    $permission->name = $permissionName;
    $permission->save();
    $this->emit('msg-ok','Roles Actualizado com sucesso');
    $this->resetInput();

 }


 public function destroyPermission($permissionId)
{
     Permission::find($permissionId)->delete();
    $this->emit('msg-ok','permission Eliminado com sucesso');
}

public function AsignerPermissions($permissinList,$roleId)
{
     if($roleId > 0){

        $role= Role::find($roleId);

        if($role){
            $role->syncPermissions($permissinList);
            $this->resetInput();
            $this->emit('msg-ok','permission assinado Corretamente');

        }
     }
}

}
