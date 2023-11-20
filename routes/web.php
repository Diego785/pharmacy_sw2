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
use App\Http\Controllers\NotaBajaController;
use App\Http\Controllers\NotaDevolucionController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PedidoProductoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;








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





