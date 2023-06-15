<?php

namespace App\Http\Livewire\Collect;

use App\Models\Collect;
use App\Models\Municip;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CollectComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $selected_id;

    public $search;

    public $action = 1;

    public $pagination = 20;

    public function render()
    {
        if (strlen($this->search) > 0) {
            $info = Collect::where('id', 'like', '%'.$this->search.'%')
            ->OrWhere('created_at', 'like', '%'.$this->search.'%')
            ->paginate($this->pagination);

            return view('livewire.collect.component', [
                'info' => $info,
            ]);
        } else {
            if (auth()->user()->roles->first()->name == 'super-admin') {
                return view('livewire.collect.component', [
                    'info' => Collect::paginate($this->pagination),
                ]);
            } elseif (auth()->user()->roles->first()->name == 'admin') {
                $municips = Municip::where('id', Auth::user()->municip_id)->get();

                foreach ($municips as $mu) {
                    $getContainers = $mu->containers;

                    foreach ($getContainers  as  $c) {
                        $data = Collect::where('container_id', $c->id)->get();
                        foreach ($data as $d) {
                            return view('livewire.collect.component', [
                                'info' => $d::paginate($this->pagination),
                            ]);
                        }
                    }
                }

                return view('livewire.collect.component', [
                    'info' => Collect::paginate($this->pagination),
                ]);
            }
        }

        return view('livewire.collect.component');
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
        $this->selected_id = null;
        $this->action = 1;
        $this->search = '';
    }

    public function distrory($id)
    {
        if ($id) {
            $info = Collect::find($id);
            $info->delete();
            $this->resetInput();
            session()->flash('message', 'Registo eliminado com sucesso');
        } else {
            session()->flash('msg_error', 'falha ao eliminar registo');
        }
    }

    protected $listeners = [
        'deletedColected' => 'distrory',
    ];
}
