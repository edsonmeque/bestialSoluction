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
                                <input type="text" class="form-control" wire:model="search" placeholder="First name">
                             </div>

                             <div class="col-lg-4 mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="24"  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                             </div>
                        </div>
                        </div>
                    </div>

                    <div class="table-responsive mb-4 mt-4">
                        <table id="zero-config" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#Ordem</th>
                                    <th>Usuario</th>
                                    <th>Numero</th>
                                    <th>Tags</th>
                                    <th>Latitude</th>
                                    <th>Longetude</th>
                                    <th>Bairro</th>
                                    <th>Municipio</th>
                                    <th>Estado</th>
                                    <th>Data Coleta</th>

                                </tr>
                            </thead>
                            <tbody>
                                 <!-- Start -->
                            @foreach ($info as $c)
                            <tr>
                                <td>#{{$c->id}}</td>
                                <td>{{$c->user->name}}</td>
                                <td>{{$c->container->number}}</td>
                                <td>{{$c->container->tags}}</td>
                                <td>{{$c->lat}}</td>
                                <td>{{$c->lng}}</td>
                                <td>{{$c->container->municip->district->buinds->name?? ''}}</td>
                                <td>{{$c->container->municip->tags?? ''}}</td>
                                <td>
                                @if($c->status_id == 4)
                                    <span class="badge bg-success">Alocado</span>

                                  @elseif($c->status_id == 6)
                                       <span class="badge bg-danger">Coletado</span>
                                    @else

                            @endif</td>

                                <td>{{$c->created_at}}</td>

                                <td>
                                    <a onclick="ConfirmDeleteImage('{{$c->id}}')" class="btn btn-sm btn-danger"><svg svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                       <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#Id</th>
                                    <th>Usuario</th>
                                    <th>Numero</th>
                                    <th>Tags</th>
                                    <th>Latitude</th>
                                    <th>Longetude</th>
                                    <th>Bairro</th>
                                    <th>Municipio</th>
                                    <th>Estado</th>
                                    <th>Data da Coleta</th>

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



