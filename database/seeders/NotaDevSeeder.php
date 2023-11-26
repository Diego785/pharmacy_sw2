<?php

namespace Database\Seeders;

use App\Imports\DatosNotaDevImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class NotaDevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excelFile = storage_path('app/nota_devolucions.xls'); 

        Excel::import(new DatosNotaDevImport, $excelFile);
    }
}
