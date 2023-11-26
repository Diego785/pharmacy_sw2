<?php

namespace App\Imports;

use App\Models\Producto;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatosProductosImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
{
    return new Producto([
        'nombre_producto' => $row['nombre_producto'],
        'descripcion' => $row['descripcion'],
        'precio_venta' => $row['precio_venta'],
        'cantidad_stock' => $row['cantidad_stock'],
        'cod_barra' => $row['cod_barra'],
        'imagen' => $row['imagen'],
        'adicional' => $row['adicional'],
        'fecha_vencimiento' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['fecha_vencimiento']),
        'existencia_minimo' => $row['existencia_minimo'],
        'categoriaID' =>$row['categoria'],
    ]);
}

}
