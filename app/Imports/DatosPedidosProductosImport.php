<?php

namespace App\Imports;

use App\Models\PedidoProducto;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosPedidosProductosImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new PedidoProducto([
            'fecha_pedido' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_pedido']),
            'total' => $row['total'],
        ]);
    }
}
