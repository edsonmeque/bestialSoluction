<div class="tab-pane fade {{$tab=='roles'? 'show active':''}} " id="roles_content" role="tabpanel">
    <div class="row mt-5">
          <div class="col-sm-12 col-md-7">
             <h6> <b>Lista de Roles </b></h6>

             <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                    </span>
                </div>
                <input type="text" id="roleName" class="form-control" autocomplete="off">
                <input type="hidden" id="roleId">
                <div class="input-group-prepend">
                    <span class="input-group-text" wire:click="$emit('createRole',$('#roleName').val(),$('#roleId').val())">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                            <polyline points="17 21 17 13 7 13 7 21"></polyline> <polyline points="7 3 7 8 15 8"></polyline></svg>
                    </span>
                </div>
             </div>

             <div class="row">
                <div class="col-12 mt-4">

                    <div class="table-responsive mb-4 mt-4">
                        <table id="tablRoles" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Descrição</th>
                                    <th>Usuario</th>
                                    <th>Acção</th>

                                    <th class="no-content"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($roles as $role)
                                <tr>
                                    @if ($role->name=='super-admin')
                                @role('super-admin')
                                    <td>{{$role->name}}</td>
                                    <td class="text-center">{{\App\Models\User::role($role->name)->count()}}</td>
                                     <td>
                                         <span style="cursor: pointer" onclick="showRoles('{{$role}}')" class="badge bg-soft-primary rounded px-3 py-1">
                                             <i class="la la-edit la-2x text-center"></i>show
                                         </span>

                                         @if (\App\Models\User::role($role->name)->count()<=0)
                                             <a href="javascript:void(0)" onclick="Confirm('{{$role->id}}','destroyRole')" title="Eliminar Role" class="badge bg-soft-danger rounded px-3 py-1">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                             </a>
                                         @endif
                                     </td>

                                     <td>
                                         <div class="n-chk" id="divRoles">
                                            <label class="new-control new-checkbox checkbox-primary">
                                              <input type="checkbox" class="new-control-input" data-name="{{$role->name}}"
                                              {{$role->checked==1? 'checked' : ''}}>
                                              <span class="new-control-indicator"></span> Asigner
                                            </label>
                                        </div>
                                     </td>
                                @endrole

                                    @else

                                    <td>{{$role->name}}</td>

                                    <td class="text-center">{{\App\Models\User::role($role->name)->count()}}</td>
                                     <td>
                                         <span style="cursor: pointer" onclick="showRoles('{{$role}}')" class="badge bg-soft-primary rounded px-3 py-1">
                                             <i class="la la-edit la-2x text-center"></i>show
                                         </span>

                                         @if (\App\Models\User::role($role->name)->count()<=0)
                                             <a href="javascript:void(0)" onclick="Confirm('{{$role->id}}','destroyRole')" title="Eliminar Role" class="badge bg-soft-danger rounded px-3 py-1">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                             </a>
                                         @endif
                                     </td>

                                     <td>
                                         <div class="n-chk" id="divRoles">
                                            <label class="new-control new-checkbox checkbox-primary">
                                              <input type="checkbox" class="new-control-input" data-name="{{$role->name}}"
                                              {{$role->checked==1? 'checked' : ''}}>
                                              <span class="new-control-indicator"></span> Asigner
                                            </label>
                                        </div>
                                     </td>
                                    @endif



                                </tr>

                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Descrição</th>
                                    <th>Usuario</th>
                                    <th>Acção</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="row text-center">
                            <!-- PAGINATION START -->
                            <div class="col-6 mt-12">
                                <div class="d-md-flex align-items-center text-center justify-content-between">
                                    <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                                    <ul class="pagination mb-0 justify-content-center mt-4 mt-sm-0">
                                     </ul>
                                </div>
                            </div><!--end col-->
                            <!-- PAGINATION END -->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
    </div>

    <div class="col-sm-12 col-md-5">
      <h6 class="text-left"><b>Elegir Usuarios</b></h6>
      <div class="input-group">
        <select wire:model="userSeleted" id="userId" class="form-control" >
            <option value="Selecionar">Selecionar</option>

            @foreach ($usuarios as $u)
                      <option value="{{$u->id}}">{{$u->name}}</option>
            @endforeach
        </select>
      </div>

      <button type="button" onclick="AsignarRoles()" class="btn btn-sm btn-primary mt-4" >Asignar Role</button>
    </div>
</div>
