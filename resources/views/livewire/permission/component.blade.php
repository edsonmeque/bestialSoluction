<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-sm-12 col-md-12 col-lg-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <ul class="nav nav-pills mt-3 mb-3" role="tablist">

                        <li class="nav-item">
                                <a href="#roles_content" class="nav-link {{$tab=='roles'? 'active':''}}  " wire:click="$set('tab',roles)" data-toggle="pills" role="tab">
                                  <i class="ti ti-user la-lg"></i>Roles
                                </a>
                        </li>

                        <li class="nav-item">
                            <a href="#permissions_content" class="nav-link {{$tab=='permissions'? 'active':'' }} " wire:click="$set('tab','permissions')" data-toggle="pills" role="tab">
                              <i class="ti ti-keys la-lg"></i>Permissions
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content">

                        @if ($tab=='roles')
                             @include('livewire.permission.roles')
                        @elseif($tab=='permissions')
                            @include('livewire.permission.permission')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showRoles(role){
      var data = JSON.parse(role);
      $('#roleName').val(data['name']);
      $('#roleId').val(data['id']);
    }

    function clearSeletedRole(){
      $('#roleName').val('');
      $('#roleId').val(0);
      $('#roleName').focus();
    }

    function showPermission(permission){
      var data = JSON.parse(permission);
      $('#permissionName').val(data['name']);
      $('#permissionId').val(data['id']);
    }

    function cleaSeletedPermission(){
      $('#permissionName').val('');
      $('#permissionId').val(0);
      $('#permissionName').focus();
    }

    function Confirm(id, eventName){

            swal.fire({
                title: 'Confirmar',
                text: 'Deseja Eliminar o Registro ?',
                type:'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                showCancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar',
                showCancelButtonText: 'Cancelar',
                closeOneConfirm:false

            }).then(okay => {


                if(okay.isConfirmed == true) {
                    if(eventName=='destroyRole') {
                        window.livewire.emit('destroyRole',id,eventName);
                        Swal.fire(
                        'Registro Deletados Com Sucesso!',
                        'Confirmado!',
                        'success'
                    )
                    }else if(eventName=='destroyPermission'){
                        window.livewire.emit('destroyPermission',id,eventName);
                        Swal.fire(
                        'Registro Deletados Com Sucesso!',
                        'Confirmado!',
                        'success'
                    )
                    }

            }
            });
        }

function AsignarRoles(){
    var  rolesList = [];


        $('#tablRoles').find('input[type=checkbox]:checked').each(function(){
            rolesList.push($(this).attr('data-name'))
        });

 if (rolesList.length<1) {
            toastr.error('','Selecione Pelomenos um Role');
            return;
    }else if ($('#userId option:selected').val()=='Selecionar') {
        toastr.error('','Selecione um usuario!');
    }


    window.livewire.emit('AsignarRoles',rolesList);

}

function asignarPermissions(){

var  permissionList = [];
    $('#tablPermission').find('input[type=checkbox]:checked').each(function(){
        permissionList.push($(this).attr('data-name'))
    });
if (permissionList.length<1) {
        toastr.error('','Selecione Pelomenos um Permission');
        return;
}
if($('#roleSelected option:selected').val()=='Selecionar') {
        toastr.error('','Selecione um role');
}
window.livewire.emit('AsignerPermissions',permissionList,$('#roleSelected option:selected').val());

}


document.addEventListener('DOMContentLoaded', function() {

    window.livewire.on('activarTab',tabName =>{

        alert(tabName);
        var tab = "[href='"+tabName+"']"
        $(tab).tab('show')
    })

window.livewire.on('msg-ok',msgText=>{
$('#permissionName').val('');
$('#permissionId').val(0);
$('#roleName').val('');
$('#roleId').val(0);
    })
});
</script>
