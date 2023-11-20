<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            CategoriaSeeder::class,
            ClientesSeeder::class,
            ProductosSeeder::class,
            ProveedoresSeeder::class,
            UsersSeeder::class,
            InventariosSeeder::class,
            DetInventariosSeeder::class,
            FacturasSeeder::class,
            DetFacturasSeeder::class,
            NotaBajaSeeder::class,
        ]);
    }
}
