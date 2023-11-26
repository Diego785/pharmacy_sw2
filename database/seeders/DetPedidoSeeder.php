<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\DatosDetPedidosImport;
use Maatwebsite\Excel\Facades\Excel;

class DetPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excelFile = storage_path('app/detalle_pedido.xls'); 

        Excel::import(new DatosDetPedidosImport, $excelFile);
    }
}
