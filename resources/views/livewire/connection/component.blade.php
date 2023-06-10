<div>
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Contentor Associados com Imagems</h3>
            </div>
            <div class="dropdown filter custom-dropdown-icon">
                <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily Analytics</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                    <a class="dropdown-item" data-value="<span>Show</span> : Daily Analytics" href="javascript:void(0);">Daily Analytics</a>
                    <a class="dropdown-item" data-value="<span>Show</span> : Weekly Analytics" href="javascript:void(0);">Weekly Analytics</a>
                    <a class="dropdown-item" data-value="<span>Show</span> : Monthly Analytics" href="javascript:void(0);">Monthly Analytics</a>
                    <a class="dropdown-item" data-value="Download All" href="javascript:void(0);">Download All</a>
                    <a class="dropdown-item" data-value="Share Statistics" href="javascript:void(0);">Share Statistics</a>
                </div>
            </div>
        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-four">

                    <div class="widget-content">
                        <div class="vistorsBrowser">
                            <div class="browser-list">

                                <div class="w-browser-details">

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Posto de Administrativo </label>
                                            <div class="form-icon position-relative">
                                                <select class="form-control  basic" wire:model.lazy='municip_id' wire:change='filterContainerByMunicip()'>
                                                    <option selected="selected">Selecione</option>
                                                     @foreach ($municips->all() as $m)
                                                             <option value="{{$m->id}}" >{{$m->name}}</option>
                                                     @endforeach
                                                 </select>
                                            </div>
                                        </div>
                                    </div><!--end col-->


                                    @if (!is_null($realStateContainers))
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Lista de Contentores</label>
                                                <div class="form-icon position-relative">
                                                    <select class="form-control  basic" wire:model.lazy='container_id' wire:change="filterImagesByContainer()">

                                                        @foreach ($realStateContainers->all() as $item)
                                                                @if ($item->status_id ==2)
                                                                    <option value="{{$item->id}}"> {{$item->tags}}</option>
                                                                @endif

                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    @endif
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            @if (!is_null($imagesList))
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row layout-top-spacing ">
                    <div class="col-xl-12 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_white widget-followers">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th >Imagems</th>
                                            <th class="no-content"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            @foreach ($imagesList as $item)
                                         <th>|
                                            <img src="{{asset('storage/uploads/images/'.$item->image)}}" width="130" height="130" alt="">
                                        </th>

                                            @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Imagens</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            @else
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                Nenhuma Imagem
            </div>

            @endif


        </div>

    </div>
</div>
