<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\DatosDetNotaDevImport;
use Maatwebsite\Excel\Facades\Excel;

class DetNotaDevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excelFile = storage_path('app/detalle_nota_dev.xls'); 

        Excel::import(new DatosDetNotaDevImport, $excelFile);
    }
}
