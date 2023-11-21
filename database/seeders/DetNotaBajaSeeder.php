<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\DatosDetNotaBajasImport;
use Maatwebsite\Excel\Facades\Excel;


class DetNotaBajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excelFile = storage_path('app/detalle_nota_baja.xls'); 

        Excel::import(new DatosDetNotaBajasImport, $excelFile);
    }
}
