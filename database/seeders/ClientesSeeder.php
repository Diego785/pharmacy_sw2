<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DatosClientesImport;


class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $excelFile = storage_path('app/cliente.xls'); // Asegúrate de que la ruta sea correcta

        Excel::import(new DatosClientesImport, $excelFile);
    }
}
