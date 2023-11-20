<?php

namespace App\Imports;

use App\Models\Proveedor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosProveedoresImport implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Proveedor([ 

            'nombre' => $row['nombre'],
            'telefono' =>$row['telefono'],
            'email' => $row['email'],
        ]);
    }
}
