<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DatosDetInventariosImport;

class DetInventariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excelFile = storage_path('app/detalle_inventario.xls'); 

        Excel::import(new DatosDetInventariosImport, $excelFile);
    }
}
