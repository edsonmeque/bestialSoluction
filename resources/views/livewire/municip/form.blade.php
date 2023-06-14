<div class="row">
    <div class="col-lg-12 mt-4">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-start text-center mb-0">
                    <b> @if($selected_id ==0) Criar Novo Posto Adminstrativo</b>
                             @else <b>Editar Posto Adminstrativo </b>
                         @endif
                </h5>
                <form>
                    <div class="row mt-4">



                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Posto Adminstrativo</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='name' name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Endereço</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='address' name="address" id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder=" Rua. Av">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='email' id="email" type="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="example@gmail.com">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Telefone</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="user-check" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='phone' name="phone" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="+258 ...">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <div class="form-icon position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input wire:model.lazy='tags' name="tags" id="tags" type="text" class="form-control @error('tags') is-invalid @enderror" name="tags" value="{{ old('tags') }}" required autocomplete="tags" autofocus placeholder="Tags">
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Lista de Distritos </label>
                                <div class="form-icon position-relative">
                                    <select  wire:model='district_id' class="form-control @error('district_id') is-invalid @enderror" name="district_id" value="{{ old('district_id') }}" required autocomplete="district_id" autofocus>
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



