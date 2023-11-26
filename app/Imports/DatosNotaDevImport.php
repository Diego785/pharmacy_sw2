<?php

namespace App\Imports;

use App\Models\NotaDevolucion;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosNotaDevImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new NotaDevolucion([
            'motivo'=>$row['motivo'],
            'fecha_dev' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_dev']),
            'facturaID' => $row['factura'],
        ]);
    }
}
