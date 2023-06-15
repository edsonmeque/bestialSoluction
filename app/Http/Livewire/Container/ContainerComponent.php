<?php

namespace App\Http\Livewire\Container;

use App\Models\Container;
use App\Models\Municip;
use App\Models\Status;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class ContainerComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    // this variable have to be  public
    public $number;

    public $tags;

    public $lat;

    public $lng;

    // relationships
    public $municips;

    public $municip_id;

    public $statuses;

    public $status_id;

    public $selected_id;

    public $search;

    public $action = 1;

    public $pagination = 10;

    public function mount(
        Municip $municip,
        Status $status, )
    {
        if (auth()->user()->roles->first()->name == 'super-admin') {
            $this->municips = $municip;
        } elseif (auth()->user()->roles->first()->name == 'admin') {
            $this->municips = $municip->where('id', auth()->user()->municip_id)->get();
        }
        $this->statuses = $status;
    }

    public function render()
    {
        if (auth()->user()->roles->first()->name == 'super-admin' | auth()->user()->roles->first()->name == 'admin') {
            if (strlen($this->search) > 0) {
                $info = Container::where('number', 'like', '%'.$this->search.'%')
                ->OrWhere('tags', 'like', '%'.$this->search.'%')
                ->OrWhere('id', 'like', '%'.$this->search.'%')
                ->paginate($this->pagination);

                return view('livewire.container.component', [
                    'info' => $info,
                ]);
            } else {
                if (auth()->user()->roles->first()->name == 'super-admin') {
                    $info = Container::paginate($this->pagination);
                } else {
                    $info = Container::where('municip_id', auth()->user()->municip_id)->paginate($this->pagination);
                }

                return view('livewire.container.component', [
                    'info' => $info,
                ]);
            }
        }
        $info = Container::where('municip_id', auth()->user()->municip_id)->paginate($this->pagination);

        return view('livewire.container.component', [
            'info' => $info,
        ]);
    }

    // this method we permitin take a page into parameter

    public function updadingSearch(): void
    {
        $this->gotoPage(1);
    }

    //this method we permitin move between pages
    public function doAction($action)
    {
        $this->resetInput();
        $this->action = $action;
    }

    public function resetInput()
    {
        $this->number = '';
        $this->tags = '';
        $this->lat = '';
        $this->lng = '';
        $this->municip_id = '';
        $this->status_id = '';
        $this->selected_id = null;
        $this->action = 1;
        $this->search = '';
    }

    public function edit($id)
    {
        $info = Container::findOrFail($id);

        $this->number = $info->number;
        $this->tags = $info->tags;

        // relationships
        $this->municip_id = $info->municip_id;
        $this->status_id = $info->status_id;
        $this->lat = $info->lat;
        $this->lng = $info->lng;
        $this->selected_id = $id;
        $this->action = 2;
    }

    public function storeOrUpdate()
    {
        $this->validate([
            'number' => 'required|integer',
            'tags' => 'required|min:2',
            'municip_id' => 'required|integer',
            'status_id' => 'required|integer',
        ]);

        if ($this->selected_id <= 0) {
            try {
                switch ($this->status_id) {
                    case 1:
                        $info = Container::create([
                            'number' => $this->number,
                            'tags' => $this->tags,
                            'lat' => $this->lat,
                            'lng' => $this->lng,
                            'municip_id' => $this->municip_id,
                            'status_id' => 5,
                        ]);
                        break;
                    case 3:

                        $info = Container::create([
                            'number' => $this->number,
                            'tags' => $this->tags,
                            'lat' => $this->lat,
                            'lng' => $this->lng,
                            'municip_id' => $this->municip_id,
                            'status_id' => 4,
                        ]);
                        break;
                    default:
                        throw new Exception('Invalid request type');
                        break;
                }
            } catch (\Throwable $th) {
                throw $th;
            }
        } else {
            try {
                switch ($this->status_id) {
                    case 1:

                        $info = Container::find($this->selected_id);

                        $info->update([
                            'number' => $this->number,
                            'tags' => $this->tags,
                            'lat' => $this->lat,
                            'lng' => $this->lng,
                            'municip_id' => $this->municip_id,
                            'status_id' => 5,
                        ]);

                        break;
                    case 3:
                        $info = Container::find($this->selected_id);

                        $info->update([
                            'number' => $this->number,
                            'tags' => $this->tags,
                            'lat' => $this->lat,
                            'lng' => $this->lng,
                            'municip_id' => $this->municip_id,
                            'status_id' => 4,
                        ]);
                        break;

                    default:
                        throw new Exception('Ivalida Nao Pode Editar Contentor Cheio ');
                        break;
                }
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        if ($this->selected_id) {
            session()->flash('message', 'Registo actualizado com sucesso!');
            $this->resetInput();
        //return with('message', 'Registe Updated  Successfully');
        } else {
            session()->flash('message', 'Registro criado com sucesso!');
            $this->resetInput();
        }
    }

    public function distrory($id)
    {
        if ($id) {
            $info = Container::find($id);
            $info->delete();
            $this->resetInput();
            session()->flash('message', 'Registo eliminado com sucesso');
        } else {
            session()->flash('msg_error', 'falha ao eliminar registo');
        }
    }

    protected $listeners = [
        'deletedContainer' => 'distrory',
    ];
}
