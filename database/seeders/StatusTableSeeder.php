<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(['name' => 'Desativado']);
        Status::create(['name' => 'Cheio']);
        Status::create(['name' => 'Activo']);
        Status::create(['name' => 'Alocado']);
        Status::create(['name' => 'Desalocado']);
        Status::create(['name' => 'Coletado']);
    }
}
