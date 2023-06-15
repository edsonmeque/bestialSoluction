<?php

namespace App\Http\Livewire\Point;

use App\Models\Image;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class PointComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $selected_id;

    public $search;

    public $action = 1;

    public $pagination = 5;

    public function render()
    {
        if (strlen($this->search) > 0) {
            $info = Image::select('*')
                 ->leftJoin('container_images', 'images.id', '=', 'container_images.id')->
                 where('container_images.image_id', null)
                    ->get();

            return view('livewire.point.component', ['info' => Image::select('*')
            ->leftJoin('container_images', 'images.id', '=', 'container_images.id')->
            where('container_images.image_id', null)
               ->get()
            ->paginate($this->pagination), ]);
        } else {
            $info = Image::select('*')
            ->leftJoin('container_images', 'images.id', '=', 'container_images.id')
            ->where('container_images.image_id', null)
               ->get();
        }

        return view('livewire.point.component', [
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
        $this->selected_id = null;
        $this->action = 1;
        $this->search = '';
    }

    public function destroy($id)
    {
        if ($id) {
            $info = Image::find($id);

            $distination = public_path('storage/uploads/point/'.$info->image);

            if (File::exists($distination)) {
                File::delete($distination);
            }
            $info->delete();
            $this->resetInput();
            session()->flash('success', 'Successfully selected_id');
        } else {
            session()->flash('success', 'Successfully selected_id');
        }
    }

// public function posicao(Image $image)
// {
//     dd($image);
// }

    protected $listeners = [
        'deletedPoint' => 'destroy',
    ];
}
