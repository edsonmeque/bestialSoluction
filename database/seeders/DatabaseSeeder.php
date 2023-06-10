<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\StatusTableSeeder;
use Database\Seeders\CountryTableSeeder;
use Database\Seeders\ProvinceTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            CountryTableSeeder::class,
            RegionTableSeeder::class,
            ProvinceTableSeeder::class,
            StatusTableSeeder::class,
            AdminsTableSeeder::class,
        ]);


    }
}
