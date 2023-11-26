<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosUsersImport implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new User([ 

            'name' => $row['name'],
            'email' => $row['email'],
            'password' => $row['password'],//1234567890
            'fecha_nac' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_nac']),
            'ci' => $row['ci'],
        ]);
    }
}
