<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = ['Norte', 'Centro', 'Sul'];

        foreach ($datas as $data) {
            Region::create([
                'name' => $data,
                'country_id' => 1,
            ]);
        }
    }
}
