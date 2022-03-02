<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Writer',
            'email' => 'writer@gmail.com',
            'password' => bcrypt('writer'),
            'role_id' => 2
        ]);
    }
}
