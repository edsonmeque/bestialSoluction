<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\User;
use App\Models\Collect;
use App\Models\Municip;
use Livewire\Component;
use App\Models\Container;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardComponent extends Component
{
    public  $count ;
    public  $municipName ;
    public $t = [1,2,3,4,5,6,7,8,9,10,11];
    public function render()
    {

        $user = User::where('municip_id',Auth::user()->municip_id )->get()->count();
        $user1 = User::where('municip_id',Auth::user()->municip_id )->first();
        $this->municipName = Municip::where('id',$user1->municip_id)->first();

        $userAdmin = User::all()->count();
        $adminContainers = Container::all()->count();
        $containerName = Container::where('municip_id','=',$user1->municip_id)->count();
        $collectCountAdmin = Collect:: all()->count();

        $chartjs = app()->chartjs
        ->name('barChartTest')
        ->type('bar')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Label x', 'Label y'])
        ->datasets([
            [
                "label" => "My First dataset",
                'backgroundColor' => ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                'data' => [69, 59]
            ],
            [
                "label" => "My First dataset",
                'backgroundColor' => ['rgba(255, 99, 132, 0.3)', 'rgba(54, 162, 235, 0.3)'],
                'data' => [65, 12]
            ]
        ])
        ->options([]);


        return view('livewire.dashboard.component',[
            'countUsers' => $user ?? '0',
            'user1' => $user1 ?? '0',
            'countUsersAdmin' => $userAdmin ?? '0',
            'countContainers' => $containerName?? '0',
            'adminContainers'=>$adminContainers?? '0',
            'collectCountAdmin'=>$collectCountAdmin ?? '0',
            'municipName'=>$this->municipName?? '',
            'collectCount'=>$this->collectCount()?? '0',
            'chartjs' => $chartjs
        ]);
    }

//     private function collectCount()
// {
//         $user1 = User::where('municip_id',Auth::user()->municip_id )->first();
//         $this->municipName = Municip::where('id',$user1->municip_id)->first();
//         $containers = Container::where('municip_id','=',$user1->municip_id)->get();
//         foreach ($containers as $c) {
//             //    $r = $c->collect()->rightJoin('containers', 'containers.id', '=', 'collects.container_id')
//             // ->get();

//                  $data = Collect:: where('container_id',$c->id)->get();
//                 $data->map(function ($a){
//                     return  $this->count=$a->count();
//                 });
//         }
//     return $this->count;
// }


private function collectCount()
{
     $municips= Municip::where('id',Auth::user()->municip_id)->get();


     foreach($municips as $mu){
            $getContainers = $mu->containers;

           foreach($getContainers  as  $c){

                $data = Collect::where('container_id',$c->id)->get();
                foreach ($data as $d) {
                    return  $this->count = $d->count();

                }

           }
     }

    }

}
