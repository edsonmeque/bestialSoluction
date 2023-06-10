<div class="row">
    <div class="col-lg-12 mt-4">

        <div class="card border-0 rounded">
            <div class="card-body">
                <h5 class="text-md-start text-center mb-0">
                    <b>
                        @if($selected_id ==0)
                        Criar Bairro
                    </b>
                    @else
                        <b>Actualizar Bairro</b>
                     @endif
                </h5>

                <form>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Province</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                    <input name="name" id="first" type="text"  required wire:model="name" class="form-control ps-5" placeholder="First Name :">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Distritos</label>
                                <div class="form-icon position-relative">
                                    <select class="form-control  basic" wire:model='district_id'>
                                        <option selected="selected">Selecione</option>
                                        @foreach ($district->all() as $d)
                                        <option value="{{$d->id}}"> {{$d->name}}</option>
                                        @endforeach
                                     </select>
                                </div>
                            </div>
                        </div><!--end col-->
                        <!--end col-->



                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-5 mt-2 text-left">
                            <button type="button" class="btn btn-sm btn-dark " wire:click="doAction(1)"><i class="abri-left"></i> Voltar</button>
                            <button type="button" class="btn btn-sm btn-primary"  wire:click.prevent="storeOrUpdate"><i class="abri-success" ></i> Guardar</button>
                      </div>
                    </div><!--end row-->
                </form><!--end form-->
            </div>
        </div>
    </div><!--end col-->


</div>
