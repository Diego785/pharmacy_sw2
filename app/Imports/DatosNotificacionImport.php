<?php

namespace App\Imports;

use App\Models\Notificacion;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosNotificacionImport  implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Notificacion([
            'encabezado'=>$row['encabezado'],
            'mensaje'=>$row['mensaje'],
            'fecha_hora' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_hora']),
            'pedido_ProductoID' => $row['pedido_producto'],
            'usuarioID'=>$row['usuario'],
        ]);
    }
}
