<div class="row">
    <div class="col-lg-12 mt-4">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-start text-center mb-0">
                    <b> @if($selected_id ==0) Criar  um novo Contentor</b>
                             @else <b>Editar Contentor </b>
                         @endif
                </h5>

                <form>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Numero de Contentor</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='number' name="number" id="last" type="text" class="form-control ps-5" placeholder="Numero de Contentor">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='tags' id="tags" type="text"  class="form-control ps-5" placeholder="example: C1">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Posto Administrativo</label>
                                <div class="form-icon position-relative">
                                    <select class="form-control  basic" wire:model='municip_id'>
                                        <option selected="selected">Selecione</option>
                                        @foreach ($municips->all() as $m)
                                        <option value="{{$m->id}}">{{$m->name}}</option>
                                        @endforeach
                                     </select>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Estado</label>
                                <div class="form-icon position-relative">
                                    <select class="form-control  basic" wire:model='status_id''>
                                        <option selected="selected">Selecione</option>
                                         @foreach ($statuses->all(['id','name']) as $status)
                                         @if($status->id!=2 &&$status->id!=4&&$status->id!=5 && $status->id!=6)
                                          <option value="{{$status->id}}">{{$status->name}}</option>
                                        @endif
                                    @endforeach
                                     </select>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Longetude</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='lat' id="lat" type="text"  class="form-control ps-5" placeholder="Latitide">
                                </div>
                            </div>

                        </div><!--end col-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Latitide</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='lng' id="lng" type="text"  class="form-control ps-5" placeholder="Longetude">
                                </div>
                            </div>

                        </div><!--end col-->


                    </div> <!--end row--> <br />
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
