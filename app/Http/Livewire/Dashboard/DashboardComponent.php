<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Collect;
use App\Models\User;
use App\Models\Country;
use App\Models\Municip;
use Livewire\Component;
use App\Models\District;
use App\Models\Province;
use App\Models\Container;
use Illuminate\Support\Facades\Auth;

class DashboardComponent extends Component
{
    public  $count ;
    public  $municipName ;
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
            'collectCount'=>$this->collectCount(),
            'chartjs' => $chartjs
        ]);
    }

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

    //->map(function ($municip){
    //     $municip = $municip->containers->map(function ($containers){
    //         return $containers->count =  $containers->map(function($cts){
    //             return $cts->collect_count_collected();
    //         })->sum();
    //     })->sum();
    //         return (Object) array('id' => $municip->id,
    //     'name'=>$municip->name,
    //      'count' => $municip->count);
    // });


    // ->map(function ($municip) {
    //   $municip = $municip->containers->map(function ($containers) {

    //     return $containers->count =  $containers->map(function($cts){

    //         return $cts->collect_count_collected();
    //     })->sum();
    //     })->sum();
    //     return (Object) array('id' => $municip->id,
    //     'name'=>$municip->name,
    //     'count' => $municip->count);
    // });


    return $this->count;

}



    // public function dashbord()
    // {
    //    $data1 = Collect::where('status_id',6)->count();
    //     $dataC = Capacity::where('peso',336)->first();
    //     $dataCon= Container::with('status')->count();
    //     $provinces = Province::all();
    //     $Qt = $dataC->peso*$data1;

    //     return view('admin.dashbord.index')
    //     ->with('data1', $data1)
    //     ->with('qt', $Qt)
    //     ->with('qc', $dataCon)
    //     ->with('label_province',$this->countries()->pluck('name'))
    //     ->with('data_province',$this->countries()->pluck('count'))
    //     ->with('label_district',$this->districts()->pluck('name'))
    //     ->with('data_district',$this->districts()->pluck('count'))
    //     ->with('provinces',$provinces);
    // }


    public function charts()
    {
        $datas = Country::with('provinces')
        ->with(['provinces'=>function($d){
             $d->with(['districts'=>function($c){
                $c->withCount('containres');
             }]);
        }])->get();
        //$datas = Province::with('districts')->withCount('districts')->get();
        return response()->json($datas, 200);
    }
}
