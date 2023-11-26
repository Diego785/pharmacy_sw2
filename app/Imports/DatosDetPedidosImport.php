<?php

namespace App\Imports;

use App\Models\DetallePedido;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosDetPedidosImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new DetallePedido([
            'cantidad'=>$row['cantidad'],
            'proveedorID' => $row['proveedor'],
            'productoID' => $row['producto'],
            'pedidoID' => $row['pedido'],
        ]);
    }
}
