<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\DatosFacturasImport;
use Maatwebsite\Excel\Facades\Excel;

class FacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excelFile = storage_path('app/factura.xls'); 

        Excel::import(new DatosFacturasImport, $excelFile);
    }
}
