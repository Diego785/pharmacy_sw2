<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function getStockByProduct()
{
    // Assuming "Producto" is the model representing the "producto" table
    $productos = Producto::select('id', 'nombre_producto', 'cantidad_stock')->get();

    // You can modify the select clause to include other columns if needed

    // If you want to return the result as JSON
    return response()->json(['productos' => $productos]);
}
}
