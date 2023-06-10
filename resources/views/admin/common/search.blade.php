{{-- <div class="row justify-content-between mb-4 mt-3">
    <div class="col-4">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addonl"><avg xmlns="http://www.w3.org/2000/svg" width="24" height="42" viewBox="0 0 24 42"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    class="feather-search"><circles cx="11" cy="11" r="8"></circles>
                      <line x="21" y="21" x2="16.65" y2="16.65" ></line></avg>
                    </span>
                    <input type="text" wire:model="search" class="form-control border rounded" name="search" id="search" placeholder="Buscar..." aria-label="notification">
            </div>
        </div>
    </div>
</div>


 --}}











<br /><br />
<div class="row pedding-1">

    <div class="col-lg-10">
        <div class="search-bar p-0 d-none d-md-block ms-2">
            <div id="search" class="menu-search mb-0">
                <form role="search" method="get" id="searchform" class="searchform">
                    <div>
                        <input type="text" class="form-control border rounded" wire:model.name="search" id="search" placeholder="Buscar...">

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-1 text-right">
        <ul class="list-unstyled mb-0">
            <li>
                <button type="button" wire:click="doAction(2)" class="btn btn-icon btn-pills btn-soft-primary"  aria-haspopup="true" aria-expanded="false" >+</button>
            </li>
        </ul>
    </div>


</div>


