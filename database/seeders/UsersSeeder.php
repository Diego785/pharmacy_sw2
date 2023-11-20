<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$TtY8UnHrZqPcjlYEkLT6/O57/t6W9V.Dkvde4sUexJBV6VwrQGX.W',//1234567890
            'fecha_nac' => '2001-03-11',
            'ci' => '9814089',
        ]);
    }
}
