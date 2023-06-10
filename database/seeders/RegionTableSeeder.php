<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = ['Norte','Centro','Sul'];

        foreach ($datas as $data) {
             Region::create([
                'name' => $data,
                'country_id'=>1
             ]);
        }
    }
}
