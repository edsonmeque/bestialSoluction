<div class="row">
    <div class="col-lg-12 mt-4">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-start text-center mb-0">
                    <b> @if($selected_id ==0) Create new Company</b>
                             @else <b>Edit Company </b>
                         @endif
                </h5>
                <form>
                    <div class="row mt-4">
                        <div class="mt-4 text-md-start text-center d-sm-flex">
                            <img src="{{$upload_image}}" class="avatar float-md-left avatar-medium rounded-circle shadow me-md-4" alt="">

                            <div class="mt-md-4 mt-3 mt-sm-0">

                                    <div class="col-md-6">
                                        {{-- <img src=" alt=""> --}}
                                        <div class="mb-3">
                                            <label class="form-label">Loading Logo</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input wire:change="$emit('fileChoosen',this)" accept="image/x-png, image/gif, image/jpeg, image/jpg" name="upload_image" id="upload_image" type="file" class="form-control ps-5" placeholder="Loading File">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Short Name</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='short_name' name="short_name" id="last" type="text" class="form-control ps-5" placeholder="Last Name :">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='email' id="email" type="email"  type="email" class="form-control ps-5" placeholder="example@gmail.com">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='phone' name="phone" id="phone" type="text" class="form-control ps-5" placeholder="Your phone first +258 ...">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Slogan</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='slog' name="email" id="slog" type="text" class="form-control ps-5" placeholder="Your slogan :">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">District</label>
                                <select class="form-select mb-3" wire:model.lazy='district_id'>
                                    <option>Selecione</option>
                                    @foreach ($district->all() as $district)
                                    <option value="{{$district->id}}">{{$district->province->name}}=>{{$district->name}}</option>
                                    @endforeach
                                 </select>
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

</div>
