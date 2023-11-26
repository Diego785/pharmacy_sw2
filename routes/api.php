<?php

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
