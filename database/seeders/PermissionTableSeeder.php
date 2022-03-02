<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Permission::create([
            'name' => 'aspirasi' // id 1
    ]);
    Permission::create([
            'name' => 'berita' // id 2
     ]);
    Permission::create([
            'name' => 'struktur organisasi' // id 3
     ]);
    Permission::create([
            'name' => 'agenda' // id 4
     ]);
    Permission::create([
            'name' => 'anggota' // id 5
     ]);
     
     $admin = Role::where('name', 'admin')->first();
     $admin->permissions()->attach([1, 2, 3, 4, 5]);
     
     $staff = Role::where('name', 'writer')->first();
     $staff->permissions()->attach([2]);
     
     $ceo = Role::where('name', 'anggota')->first();
     $ceo->permissions()->attach([1]);
    }
}
