<?php

namespace App\Imports;

use App\Models\DetalleNotaDev;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosDetNotaDevImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new DetalleNotaDev([
            'cantidad' => $row['cantidad'],
            'observacion' => $row['observacion'],
            'productoID' => $row['producto'],
            'notadevID' => $row['notadev'],
        ]);
    }
}
