<?php

use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\ProductosController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VentasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//FACTURAS
Route::get('/total-ventas', [VentasController::class, 'calcularTotalVentas'])->name('total');
Route::get('/crecimiento', [VentasController::class, 'calculateOverallGrowth'])->name('crecimiento');
Route::get('/count-ventas', [VentasController::class, 'countVentas'])->name('count-ventas');
Route::get('/get-list', [VentasController::class, 'getListFacturas'])->name('get-list-facturas');

//USERS
Route::get('/new-users', [UserController::class, 'newUsers'])->name('newusers');

//PRODUCTOS
Route::get('/stock-product', [ProductosController::class, 'getStockByProduct'])->name('products');


// ALL THE TABLES
Route::get('/factura', [GeneralController::class, 'getFacturas'])->name('factura');
Route::get('/detalle-factura', [GeneralController::class, 'getDetalleFacturas'])->name('detalle.factura');
Route::get('/clients', [GeneralController::class, 'getClientes'])->name('cliente');
Route::get('/inventario', [GeneralController::class, 'getInventario'])->name('inventario');
Route::get('/detalle-inventario', [GeneralController::class, 'getDetalleInventario'])->name('detalle.inventario');
Route::get('/nota-dev', [GeneralController::class, 'getNotaDev'])->name('nota-dev');
Route::get('/nota-baja', [GeneralController::class, 'getNotaBaja'])->name('nota-baja');
Route::get('/detalle-nota-dev', [GeneralController::class, 'getDetalleNotaDev'])->name('detalle.nota-dev');
Route::get('/detalle-nota-baja', [GeneralController::class, 'getDetalleNotaBaja'])->name('detalle.nota-baja');
Route::get('/producto', [GeneralController::class, 'getProducto'])->name('producto');
Route::get('/pedido', [GeneralController::class, 'getPedido'])->name('pedido');
Route::get('/detallle-pedido', [GeneralController::class, 'getDetallePedido'])->name('detalle.pedido');
Route::get('/proveedor', [GeneralController::class, 'getProveedor'])->name('proveedor');




