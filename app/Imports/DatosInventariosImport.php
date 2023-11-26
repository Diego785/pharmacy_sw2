<?php

namespace App\Imports;

use App\Models\Inventario;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosInventariosImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Inventario([
            'fecha_ingreso' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_ingreso']),
            'cantidad_ingresada' => $row['cantidad_ingresada'],
            'total_costo' => $row['total_costo'],
        ]);
    }
}
