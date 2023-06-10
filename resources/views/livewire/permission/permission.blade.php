<div class="tab-pane fade {{$tab=='permissions'? 'show active':''}} " id="permissions_content" role="tabpanel">
    <div class="row mt-5">
          <div class="col-sm-12 col-md-7">
             <h6> <b>PERMISSOES DE SISTEMA</b></h6>

             <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                    </span>
                </div>
                <input type="text" id="permissionName" class="form-control" autocomplete="off">
                <input type="hidden" id="permissionId">
                <div class="input-group-prepend">
                    <span class="input-group-text" wire:click="$emit('createPermission',$('#permissionName').val(),$('#permissionId').val())">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                            <polyline points="17 21 17 13 7 13 7 21"></polyline> <polyline points="7 3 7 8 15 8"></polyline></svg>
                    </span>
                </div>
             </div>

             <div class="row">
                <div class="col-12 mt-4">


                    <div class="table-responsive mb-4 mt-4">
                        <table id="tablPermission" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Descrição</th>
                                    <th>Roles</th>
                                    <th>Acção</th>

                                    <th class="no-content"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{$permission->name}}</td>
                                    <td>{{\App\Models\User::permission($permission->name)->count()}}</td>
                                     <td>
                                         <span style="cursor: pointer" onclick="showPermission('{{$permission}}')" class="badge bg-soft-primary rounded px-3 py-1">
                                             <i class="la la-edit la-2x text-center"></i>show
                                         </span>

                                         @if (\App\Models\User::permission($permission->name)->count()<=0)
                                             <a href="javascript:void(0)" onclick="Confirm('{{$permission->id}}','destroyPermission')" title="Eliminar Permission" class="badge bg-soft-danger rounded px-3 py-1">delete
                                                 <i class="la la-trash la-2x text-center"></i>
                                             </a>
                                         @endif
                                     </td>

                                     <td class="text-center">
                                         <div class="n-chk" id="divPermission">
                                            <label class="new-control new-checkbox checkbox-primary">
                                              <input type="checkbox" class="new-control-input" data-name="{{$permission->name}}" {{$permission->checked==1? 'checked': 'unchecked'}}>
                                              <span class="new-control-indicator"></span> Asigner
                                            </label>
                                        </div>
                                     </td>
                                </tr>

                                @endforeach       <!-- Start -->

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Descrição</th>
                                    <th>Roles</th>
                                    <th>Acção</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div><!--end col-->
            </div><!--end row-->
    </div>

    <div class="col-sm-12 col-md-5">
      <h6 class="text-left"><b>Elegir Roles</b></h6>
      <div class="input-group">
        <select wire:model="roleSelected" id="roleSelected" name="roleId" class="form-control" >
            <option value="Selecionar">Selecionar</option>

            @foreach ($roles as $r)
                <option value="{{$r->id}}">{{$r->name}}</option>
            @endforeach
        </select>
      </div>

      <button type="button" onclick="asignarPermissions()" class="btn btn-sm btn-primary mt-4">Asignar Permission</button>
    </div>
</div>


