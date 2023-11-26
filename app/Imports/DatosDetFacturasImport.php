<?php

namespace App\Imports;

use App\Models\DetalleFactura;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class DatosDetFacturasImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new DetalleFactura([
            'cantidad' => $row['cantidad'],
            'subtotal' => $row['subtotal'],
            'precio_u' => $row['precio_u'],
            'productoID' => $row['producto'],
            'facturaID' => $row['factura'],

        ]);
    }
}
