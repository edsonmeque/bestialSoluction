<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Collect;
use App\Models\Container;
use App\Models\Municip;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardComponent extends Component
{
    public $count;

    public $municipName;

    public $t = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

    public function render()
    {
        $user = User::where('municip_id', Auth::user()->municip_id)->get()->count();
        $user1 = User::where('municip_id', Auth::user()->municip_id)->first();
        $this->municipName = Municip::where('id', $user1->municip_id)->first();

        $userAdmin = User::all()->count();
        $adminContainers = Container::all()->count();
        $containerName = Container::where('municip_id', '=', $user1->municip_id)->count();
        $collectCountAdmin = Collect::all()->count();

        $collectsfactoryData = collect(Auth::user()->municip->collects->filter(function (Collect $collect) {
            return $collect->status_id == 6;
        })->map(function (Collect $collect) {
            $monthName = $collect->created_at->format('F');
            $collect->month = $monthName;

            return $collect;
        })->countBy('month')->all());

        $chartjs = app()->chartjs
        ->name('barChartTest')
        ->type('bar')
        ->size(['width' => 400, 'height' => 200])
        ->labels($this->collectData($collectsfactoryData)->keys()->toArray())
        ->datasets([
            [
                'label' => 'Número de colectas por mês',
                'backgroundColor' => [
                    'rgba(255, 99, 132, 0.3)',
                    'rgba(54, 162, 235, 0.3)',
                    'rgba(255, 205, 86, 0.3)',
                    'rgba(75, 192, 192, 0.3)',
                    'rgba(153, 102, 255, 0.3)',
                    'rgba(255, 159, 64, 0.3)',
                    'rgba(255, 0, 0, 0.3)',
                    'rgba(0, 255, 0, 0.3)',
                    'rgba(0, 0, 255, 0.3)',
                    'rgba(128, 128, 128, 0.3)',
                    'rgba(255, 0, 255, 0.3)',
                    'rgba(0, 255, 255, 0.3)',
                ],
                'data' => $this->collectData($collectsfactoryData)->values()->toArray(),
            ],
        ])
        ->options([]);



        $municipios = app()->chartjs
        ->name('municipiosChart')
        ->type('bar')
        ->size(['width' => 400, 'height' => 200])
        ->labels(Municip::all()->map(function($p){ $p->collectCount = $p->collects->count() ?? 0 ;return $p;})
        ->pluck('collectCount','name')->keys()->all()
        )
        ->datasets([
            [
                'label' => 'Total de colectas já realizas',
                'backgroundColor' => [
                    'rgba(255, 99, 132, 0.3)',
                    'rgba(54, 162, 235, 0.3)',
                    'rgba(255, 205, 86, 0.3)',
                    'rgba(75, 192, 192, 0.3)',
                    'rgba(153, 102, 255, 0.3)',
                    'rgba(255, 159, 64, 0.3)',
                    'rgba(255, 0, 0, 0.3)',
                    'rgba(0, 255, 0, 0.3)',
                    'rgba(0, 0, 255, 0.3)',
                    'rgba(128, 128, 128, 0.3)',
                    'rgba(255, 0, 255, 0.3)',
                    'rgba(0, 255, 255, 0.3)',
                ],
                'data' => Municip::all()->map(function($p){ $p->collectCount = $p->collects->count() ?? 0 ;return $p;})
                ->pluck('collectCount','name')->values()->all()
                ,
            ],
        ])
        ->options([]);

        return view('livewire.dashboard.component', [
            'countUsers' => $user ?? '0',
            'user1' => $user1 ?? '0',
            'countUsersAdmin' => $userAdmin ?? '0',
            'countContainers' => $containerName ?? '0',
            'adminContainers' => $adminContainers ?? '0',
            'collectCountAdmin' => $collectCountAdmin ?? '0',
            'municipName' => $this->municipName ?? '',
            'collectCount' => $this->collectCount() ?? '0',
            'chartjs' => $chartjs,
            'municipios' => $municipios,
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

private function collectData(Collection $data)
{
    $chartkeys = collect([
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    ]);

    $chartArray = collect([]);

    foreach ($chartkeys as $key) {
        if ($data->has($key)) {
            $chartArray->put($key, $data->get($key));
        } else {
            $chartArray->put($key, 0);
        }
    }

    return $chartArray;
}

private function collectCount()
{
    $municips = Municip::where('id', Auth::user()->municip_id)->get();

    foreach ($municips as $mu) {
        $getContainers = $mu->containers;

        foreach ($getContainers  as  $c) {
            $data = Collect::where('container_id', $c->id)->get();
            foreach ($data as $d) {
                return  $this->count = $d->count();
            }
        }
    }
}
}
