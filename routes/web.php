<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriumController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleFacturaController;
use App\Http\Controllers\DetalleNotaBajaController;
use App\Http\Controllers\DetalleNotaDevController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\DetalleInventarioController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NotaBajaController;
use App\Http\Controllers\NotaDevolucionController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PedidoProductoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/dashboard-error/{productName}', function ($productName) {
    smilify('error', "¡Ocurrió una anomalía en la cantidad de stock del producto $productName en tu inventario!");
    return view('dashboard');
})->name('dashboard-error');
Route::get('/dashboard-success', function () {
    smilify('success', '¡Sin anomalías encontradas!');
    return view('dashboard');
})->name('dashboard-success');


Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu-show');
Route::get('/inicio', [MenuController::class, 'showInicio'])->name('inicio-show');
Route::get('/soporte', [MenuController::class, 'showSoporte'])->name('soporte-show');
Route::get('/contact', [MenuController::class, 'showContact'])->name('contact-show');
Route::get('/preguntas', [MenuController::class, 'showPreguntas'])->name('preguntas-show');
Route::get('/menu-projects', [MenuController::class, 'showMenuProjects'])->name('menu-projects-show');



Route::resource('categoria', CategoriumController::class);
Route::resource('productos', ProductoController::class);
Route::resource('proveedors', ProveedorController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('detalle-facturas', DetalleFacturaController::class);
Route::resource('detalle-inventarios', DetalleInventarioController::class);
Route::resource('facturas', FacturaController::class);
Route::resource('detalle-nota-devs', DetalleNotaDevController::class);
Route::resource('detalle-nota-bajas', DetalleNotaBajaController::class);
Route::resource('detalle-pedidos', DetallePedidoController::class);
Route::resource('nota-devolucions', NotaDevolucionController::class);
Route::resource('nota-bajas', NotaBajaController::class);
Route::resource('pedido-productos', PedidoProductoController::class);
Route::resource('notificacions', NotificacionController::class);
Route::resource('inventarios', InventarioController::class);
Route::resource('users', UserController::class);
Route::resource('proveedors', ProveedorController::class);


Route::get('/find-anomaly', [ProductoController::class, 'findAnomaly'])->name('find-anomaly');
