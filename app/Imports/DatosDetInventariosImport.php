<?php

namespace App\Imports;

use App\Models\DetalleInventario;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosDetInventariosImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new DetalleInventario([
            'numero_lote' => $row['numero_lote'],
            'cantidad' => $row['cantidad'],
            'precio_compra' => $row['precio_compra'],
            'total' => $row['total'],
            'fecha_venc_lote' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_venc_lote']),
            'proveedorID' => $row['proveedor'],
            'productoID' => $row['producto'],
            'inventarioID' => $row['inventario'],
        ]);
    }
}
