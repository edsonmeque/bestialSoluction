<div class="row">
    <div class="col-lg-12 mt-4">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-start text-center mb-0">
                    <b> @if($selected_id ==0) Create new Company</b>
                             @else <b>Edit Company </b>
                         @endif
                </h5>
                @include('admin.common.message')
                <form>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            {{-- <img src="{{$upload_image}}" class="avatar float-md-left avatar-medium rounded-circle shadow me-md-4" alt=""> --}}

                            <div class="mt-md-4 mt-3 mt-sm-0">


                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Municipio</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='name' name="name" id="first" type="text" class="form-control ps-5" placeholder="Nome">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Endereço</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='address' name="address" id="first" type="text" class="form-control ps-5" placeholder="Endre">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='email' id="email" type="email"  type="email" class="form-control ps-5" placeholder="example@gmail.com">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='phone' name="phone" id="phone" type="text" class="form-control ps-5" placeholder="Your phone first +258 ...">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='tags' name="email" id="tags" type="text" class="form-control ps-5" placeholder="Tags">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Lista de Distritos </label>
                                <div class="form-icon position-relative">
                                    <select class="form-control  basic" wire:model='district_id'>
                                        <option selected="selected">Selecione</option>
                                        @foreach ($district->all() as $d)
                                        <option value="{{$d->id}}"> {{$d->name}}</option>
                                        @endforeach
                                     </select>
                                </div>
                            </div>
                        </div>

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
</div>



