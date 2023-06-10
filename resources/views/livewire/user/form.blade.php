<div >
    @include('admin.common.message')

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
                            <b>Edit Usuario</b>
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
                                        {{-- <input wire:model.lazy='name' name="name" id="first" type="text" class="form-control ps-5" placeholder="First Name :"> --}}
                                        <input id="name" type="text"   wire:model.lazy='name'class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                        {{-- <input wire:model.lazy='email' id="email" type="email"  type="email" class="form-control ps-5" placeholder="example@gmail.com"> --}}
                                        <input id="email" wire:model.lazy='email' type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
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
                                        <select class="form-control  basic" wire:model='municip_id'>
                                            <option selected="selected">Selecione</option>
                                            @foreach ($municipies->all() as $d)

                                            @role('super-admin')
                                                 <option value="{{$d->id}}"> {{$d->name}}</option>
                                            @endrole
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
                                        <input id="password" type="password" wire:model.lazy='password' class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Confirmar Senha</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                        <input id="password_confirm" wire:model.lazy='password_confirm'type="password" class="form-control" name="password_confirm" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 center">
                                <div class="form-check">
                                    <input class="form-check-input" wire:model.lazy="status" type="radio" name="type" id="type" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Habilitar
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" wire:model.lazy="status" type="radio" name="type" id="type" value="0">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Desabilitar
                                    </label>
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
