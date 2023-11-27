<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\DetalleFactura;
use App\Models\DetalleInventario;
use App\Models\DetalleNotaBaja;
use App\Models\DetalleNotaDev;
use App\Models\DetallePedido;
use App\Models\Factura;
use App\Models\Inventario;
use App\Models\NotaBaja;
use App\Models\NotaDevolucion;
use App\Models\Notificacion;
use App\Models\PedidoProducto;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function getFacturas()
    {
        $facturas = Factura::all();
        return response()->json(['facturas' => $facturas]);
    }
    public function getDetalleFacturas()
    {
        $detalle_facturas = DetalleFactura::all();
        return response()->json(['detalle_facturas' => $detalle_facturas]);
    }
    public function getClientes()
    {
        $clients = Cliente::all();
        return response()->json(['clients' => $clients]);
    }
    public function getInventario()
    {
        $inventario = Inventario::all();
        return response()->json(['inventario' => $inventario]);
    }
    public function getDetalleInventario()
    {
        $detalle_inventario = DetalleInventario::all();
        return response()->json(['detalle_inventario' => $detalle_inventario]);
    }

    public function getNotaDev()
    {
        $nota_dev = NotaDevolucion::all();
        return response()->json(['nota_dev' => $nota_dev]);
    } public function getNotaBaja()
    {
        $nota_baja = NotaBaja::all();
        return response()->json(['nota_baja' => $nota_baja]);
    } public function getDetalleNotaDev()
    {
        $detalle_nota_dev = DetalleNotaDev::all();
        return response()->json(['detalle_nota_dev' => $detalle_nota_dev]);
    } public function getDetalleNotaBaja()
    {
        $detalle_nota_baja = DetalleNotaBaja::all();
        return response()->json(['detalle_nota_baja' => $detalle_nota_baja]);
    } public function getProducto()
    {
        $productos = Producto::all();
        return response()->json(['productos' => $productos]);
    } public function getPedido()
    {
        $pedido = PedidoProducto::all();
        return response()->json(['pedido' => $pedido]);
    } public function getDetallePedido()
    {
        $detalle_pedido = DetallePedido::all();
        return response()->json(['detalle_pedido' => $detalle_pedido]);
    }
    public function getProveedor()
    {
        $proveedor = Proveedor::all();
        return response()->json(['detalle_facturas' => $proveedor]);
    }
    public function getNotificacion()
    {
        $notificacion = Notificacion::all();
        return response()->json(['notificacion' => $notificacion]);
    }


}
