<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
