<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\DatosNotificacionImport;
use Maatwebsite\Excel\Facades\Excel;

class NotificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excelFile = storage_path('app/notificacion.xls'); 

        Excel::import(new DatosNotificacionImport, $excelFile);
    }
}
