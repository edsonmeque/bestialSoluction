<div>
    <div class="layout-px-spacing">

    @if($action == 1)
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="row mb-4">
                        <div class="col-lg-4">
                        <div class="row">
                             <div class="col-lg-8">
                                <input type="text" class="form-control" placeholder="First name">
                             </div>

                             <div class="col-lg-4 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"  wire:model="search" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                             </div>
                        </div>
                        </div>
                        <div class="col-lg-8 text-right">
                            <button type="button" wire:click="doAction(2)" class="btn btn-info round"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg></button>
                        </div>
                    </div>

                    <div class="table-responsive mb-4 mt-4">
                        <table id="zero-config" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#Id</th>
                                    <th>Numero</th>
                                    <th>Tags</th>
                                    <th>Municipio</th>
                                    <th>Estado</th>
                                    <th></th>
                                    <th>created_at</th>
                                    <th>updated_at</th>

                                    <th class="no-content"></th>
                                </tr>
                            </thead>
                            <tbody>
                                 <!-- Start -->
                            @foreach ($info as $c)
                            <tr>
                                <td>#{{$c->id}}</td>
                                <td>{{$c->number}}</td>
                                <td>{{$c->tags}}</td>
                                <td>{{$c->municip->name ?? ''}}</td>
                                <td>

                                @if($c->status_id == 4)
                                    <span class="badge bg-success">Alocado</span>

                                @elseif($c->status_id == 2)

                                    <span class="badge bg-warning">Cheio </span>

                                  @elseif($c->status_id == 5)
                                       <span class="badge bg-danger">desalocado</span>
                                    @else

                            @endif</td>
                                 <td>[{{$c->images()->count()}}]</td>
                                <td>{{$c->created_at}}</td>
                                <td>{{$c->updated_at}}</td>

                                <td>


                                    <a  wire:click="edit({{$c->id}})" class="btn btn-sm btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path  d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"> </path> <path  d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"> </path></svg></a>
                                    <a onclick="ConfirmDeleteContainer('{{$c->id}}')" class="btn btn-sm btn-danger"><svg svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                       <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#Id</th>
                                    <th>Numero</th>
                                    <th>Tags</th>
                                    <th>Municipio</th>
                                    <th>Estado</th>
                                    <th></th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="row text-center">
                            <!-- PAGINATION START -->
                            <div class="col-6 mt-12">
                                <div class="d-md-flex align-items-center text-center justify-content-between">
                                    <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                                    <ul class="pagination mb-0 justify-content-center mt-4 mt-sm-0">
                                        {{$info->links()}}
                                     </ul>
                                </div>
                            </div><!--end col-->
                            <!-- PAGINATION END -->
                        </div><!--end row-->
                    </div>
                </div>
            </div>

        </div>
    @elseif($action==2)
    @include('livewire.container.form')
    @endif

</div>

<script>
    function ConfirmDeleteContainer(id){
            let me = this;
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
                    window.livewire.emit('deletedContainer',id);
                    Swal.fire(
                    'Registro Deletados Com Sucesso!',
                    'Confirmado!',
                    'success'
                    )
            }
            });
    }
    </script>



