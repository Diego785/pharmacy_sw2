<?php

namespace App\Imports;

use App\Models\Factura;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosFacturasImport  implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Factura([
            'nit'=>$row['nit'],
            'fecha' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha']),
            'total' => $row['total'],
            'nota' => $row['nota'],
            'tipo' => $row['tipo'],
            'clienteID' => $row['cliente'],
            'usuarioID' => $row['usuario'],
        ]);
    }
}
