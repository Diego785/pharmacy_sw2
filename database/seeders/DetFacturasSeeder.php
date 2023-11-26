<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\DatosDetFacturasImport;
use Maatwebsite\Excel\Facades\Excel;

class DetFacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excelFile = storage_path('app/detalle_factura.xls'); 

        Excel::import(new DatosDetFacturasImport, $excelFile);
    }
}
