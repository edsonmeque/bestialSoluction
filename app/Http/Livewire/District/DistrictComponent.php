<?php

namespace App\Http\Livewire\District;

use App\Models\District;
use App\Models\Province;
use Livewire\Component;
use Livewire\WithPagination;

class DistrictComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name;

    public $province_id;

    public $province;

    public $selected_id;

    public $search;

    public $action = 1;

    public $pagination = 5;

    public function mount(Province $province)
    {
        $this->province = $province;
    }

    public function render()
    {
        if (strlen($this->search) > 0) {
            return view('livewire.district.component', [
                'info' => District::where('name', 'like'.'%'.$this->search.'%')->paginate($this->pagination),
            ]);
        } else {
            $info = District::paginate($this->pagination);
        }

        return view('livewire.district.component', [
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
        $this->province_id = 0;
    }

    public function edit($id)
    {
        $record = District::findOrFail($id);
        $this->name = $record->name;
        $this->province_id = $record->province_id;
        $this->selected_id = $id;
        $this->action = 2;
    }

    public function storeOrUpdate()
    {
        $this->validate([
            'name' => 'required',
            'province_id' => 'required|integer',
        ]);

        if ($this->selected_id > 0) {
            $exists = District::where('name', $this->name)
                               ->where('id', '<>', $this->selected_id)
                               ->select('name')->get();
            if ($exists->count() > 0) {
                session()->flash('msg_error', 'Já  existe registo com mesmo nome');
                $this->resetInput();

                return;
            }
        } else {
            $exists = District::where('name', $this->name)->select('name')->get();
            if ($exists->count() > 0) {
                session()->flash('msg_error', 'Já  existe registo com mesmo nome');
                $this->resetInput();

                return;
            }
        }

        if ($this->selected_id <= 0) {
            $info = District::create([
                'name' => $this->name,
                'province_id' => $this->province_id,
            ]);
        } else {
            $info = District::find($this->selected_id);
            $info->update([
                'name' => $this->name,
                'province_id' => $this->province_id,
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
        if (auth()->user()->roles->first()->name == 'super-admin') {
            if ($id) {
                $info = District::find($id);
                $info->delete();
                $this->resetInput();
                session()->flash('success', 'Successfully selected_id');
            } else {
                session()->flash('success', 'Successfully selected_id');
            }
        } else {
            abort(401);
        }
    }

    protected $listeners = [
        'deletedDistrict' => 'distrory',
    ];
}
