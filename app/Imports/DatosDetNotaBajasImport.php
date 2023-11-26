<?php

namespace App\Imports;

use App\Models\DetalleNotaBaja;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosDetNotaBajasImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new DetalleNotaBaja([
            'cantidad' => $row['cantidad'],
            'observacion' => $row['observacion'],
            'productoID' => $row['producto'],
            'bajaID' => $row['baja'],
        ]);
    }
}
