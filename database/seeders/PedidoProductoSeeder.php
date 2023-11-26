<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\DatosPedidosProductosImport;
use Maatwebsite\Excel\Facades\Excel;

class PedidoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excelFile = storage_path('app/pedido_producto.xls'); 

        Excel::import(new DatosPedidosProductosImport, $excelFile);
    }
}
