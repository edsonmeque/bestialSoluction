<?php

namespace Database\Seeders;

use App\Models\Municip;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'super-admin',
            'email' => 'super-admin@gmail.com',
            'status' => 1,
            'municip_id' => 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

        ]);

        Permission::create(['name' => 'dashboard']);
        Permission::create(['name' => 'countries']);
        Permission::create(['name' => 'users']);
        Permission::create(['name' => 'municips']);
        Permission::create(['name' => 'containers']);
        Permission::create(['name' => 'collects']);
        Permission::create(['name' => 'points']);

        $super_admin = Role::create(['name' => 'super-admin']);
        $super_admin->givePermissionTo([
            'dashboard',
            'countries',
            'users',
            'municips',
            'containers',
            'collects',
            'points',
        ]);
        $user = User::find(1);
        $user->assignRole('super-admin');

        Municip::create([
            'name' => 'Chiveve',
            'tags' => 'CMB',
            'email' => 'cmb@gmai;.com',
            'phone' => '+258 844204657',
            'address' => 'Rua andrade corvo avinida 3382',
            'district_id' => 1,
            'user_id' => 1,
        ]);
    }
}
