<div >
    <div class="row">
        <div class="col-lg-12 mt-4">

            <div class="card border-0 rounded shadow">
                <div class="card-body">
                    <h5 class="text-md-start text-center mb-0">
                        <b>
                            @if($selected_id ==0)
                               Formulario de Usuario
                        </b>
                        @else
                            <b>Editar Usuario</b>
                         @endif
                    </h5>
                    <div class="mt-4 text-md-start text-center d-sm-flex">
                        <form action="/files-upload" class= "dropzone"
                        id="my-awesome-dropzone">
                        </form>
                    </div>
                    <form wire:submit.prevent='storeOrUpdate'>
                        <div class="row mt-4">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Nome do Usuario</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                        <input id="name" type="text"   wire:model.lazy='name'class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                        {{-- <input wire:model.lazy='email' id="email" type="email"  type="email" class="form-control ps-5" placeholder="example@gmail.com"> --}}
                                        <input id="email" wire:model.lazy='email' type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Telefone</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                        {{-- <input wire:model.lazy='phone' name="phone" id="phone" type="text" class="form-control ps-5" placeholder="Your phone first +258 ..."> --}}
                                        <input id="phone" wire:model.lazy='phone' type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="Your phone first +258 ...">
                                    </div>
                                </div>
                            </div><!--end col-->


                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Posto Administrativo</label>
                                    <div class="form-icon position-relative">
                                        <select wire:model='municip_id'  class="form-control " name="municip_id" required >
                                            <option selected="selected">Selecione</option>
                                            @foreach ($municipies->all() as $d)
                                                 <option value="{{$d->id}}"> {{$d->name}}</option>
                                            @endforeach
                                         </select>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Senha</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                        <input id="password" type="password" wire:model.lazy='password' class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="senha">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Confirmar Senha</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                        <input id="password_confirm" wire:model.lazy='password_confirm'type="password" class="form-control @error('password_confirm') is-invalid @enderror" name="password_confirm" required autocomplete="confirmar senha">
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
</div>
