<?php

namespace App\Http\Livewire\Collect;

use App\Models\Collect;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class CollectComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $selected_id, $search;
    public $action = 1;
    public $pagination = 20;

    public function render()
    {

        if(strlen($this->search)>0){
          
            $info = Collect::where('id', 'like', '%'.$this->search.'%')
            ->OrWhere('created_at', 'like', '%'.$this->search.'%')
            ->paginate($this->pagination);

            return view('livewire.collect.component',[
                'info'=>$info,
            ]);
    }else{


            if(auth()->user()->roles->first()->name =='super-admin'){
                return view('livewire.collect.component',[
                    'info'=>Collect::paginate($this->pagination)
                ]);
            }else{
                return view('livewire.collect.component',[
                    'info'=>Collect::where('user_id',auth()->user()->municip_id)->paginate($this->pagination)
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
    {   $this->resetInput();
        $this->action = $action;
    }


    public function resetInput()
    {

        $this->selected_id = null;
        $this->action = 1;
        $this->search='';

    }

    public function edit($id)
    {
        $record = Collect::findOrFail($id);

        $this->selected_id =$id;
        $this->action = 2;
    }
}
