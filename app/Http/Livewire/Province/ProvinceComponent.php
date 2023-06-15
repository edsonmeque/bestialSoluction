<?php

namespace App\Http\Livewire\Province;

use App\Models\Province;
use App\Models\Region;
use Livewire\Component;
use Livewire\WithPagination;

class ProvinceComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name;

    public $region_id;

    public $region;

    public $selected_id;

    public $search;

    public $action = 1;

    public $pagination = 5;

    public function mount(Region $region)
    {
        $this->region = $region;
    }

    public function render()
    {
        if (strlen($this->search) > 0) {
            return view('livewire.province.component', ['info' => Province::where('name', 'like', '%'.$this->search.'%')
            ->paginate($this->pagination), ]);
        } else {
            $info = Province::paginate($this->pagination);
        }

        return view('livewire.province.component', [
            'info' => $info,
        ]);
    }

    public function updateSearch()
    {
        $this->gotoPage(1);
    }

    public function doAction($action)
    {
        $this->resetInput();
        $this->action = $action;
    }

    public function resetInput()
    {
        $this->name = '';
        $this->selected_id = null;
        $this->action = 1;
        $this->search = '';
        $this->region_id = 0;
    }

    public function edit($id)
    {
        $record = Province::findOrFail($id);
        $this->name = $record->name;
        $this->region_id = $record->region_id;
        $this->selected_id = $id;
        $this->action = 2;
    }

    public function storeOrUpdate()
    {
        $this->validate([
            'name' => 'required|min:3',
            'region_id' => 'required|integer',
        ]);

        if ($this->selected_id > 0) {
            $exists = Province::where('name', $this->name)
                               ->where('id', '<>', $this->selected_id)
                               ->select('name')->get();
            if ($exists->count() > 0) {
                session()->flash('msg_error', 'Já  existe registo com mesmo nome');
                $this->resetInput();

                return;
            }
        } else {
            $exists = Province::where('name', $this->name)->select('name')->get();
            if ($exists->count() > 0) {
                session()->flash('msg_error', 'Já  existe registo com mesmo nome');
                $this->resetInput();

                return;
            }
        }

        if ($this->selected_id <= 0) {
            $info = Province::create([
                'name' => $this->name,
                'region_id' => $this->region_id,
            ]);
        } else {
            $info = Province::find($this->selected_id);
            $info->update([
                'name' => $this->name,
                'region_id' => $this->region_id,
            ]);
        }

        if ($this->selected_id) {
            session()->flash('success', 'Successfully selected_id');
        } else {
            session()->flash('success', 'Successfully selected_id');
        }

        $this->resetInput();
    }

    public function distrory($id)
    {
        if ($id) {
            $info = Province::find($id);
            $info->delete();
            $this->resetInput();
            session()->flash('success', 'Successfully selected_id');
        } else {
            session()->flash('success', 'Successfully selected_id');
        }
    }

    protected $listeners = [
        'deletedProvince' => 'distrory',
    ];
}
