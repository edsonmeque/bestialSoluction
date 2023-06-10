<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataNorte = ['Niassa','Cabo Delegado','Nampula'];

        foreach ($dataNorte as $data) {
             Province::create([
                'name' => $data,
                'region_id'=>1
             ]);
        }
        $dataCentro = ['Zambezia','Sofala','Manica','Tete'];
        foreach ($dataCentro as $data) {
            Province::create([
               'name' => $data,
               'region_id'=>2
            ]);
       }
       $dataSul = ['Inhabane','Gaza','Maputo'];
       foreach ($dataSul as $data) {
        Province::create([
           'name' => $data,
           'region_id'=>3
        ]);


        $dataSul = ['Beira','Manica','Tete','Zambezia'];
       foreach ($dataSul as $data) {
        District::create([
           'name' => $data,
           'province_id'=>3
        ]);
   }
   }

    }
}
