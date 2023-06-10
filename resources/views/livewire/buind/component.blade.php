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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
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
                                    <th>Nome</th>
                                    <th>Distritos</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>

                                    <th class="no-content"></th>
                                </tr>
                            </thead>
                            <tbody>
                                 <!-- Start -->
                            @foreach ($info as $b)
                            <tr>
                                <td>#{{$b->id}}</td>
                                <td>{{$b->name}}</td>
                                <td>{{$b->district->name ?? ''}}</td>
                                <td>{{$b->created_at}}</td>
                                <td>{{$b->updated_at}}</td>

                                <td>

                                    <a onclick="ConfirmDeleteBuind('{{$b->id}}')"><svg svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Distritos</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
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
    @include('livewire.buind.form')
    @endif

</div>

<script>
    function ConfirmDeleteBuind(id){
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
                    window.livewire.emit('deletedBuind',id);
                    Swal.fire(
                    'Registro Deletados Com Sucesso!',
                    'Confirmado!',
                    'success'
                    )
            }
            });
    }
    </script>




