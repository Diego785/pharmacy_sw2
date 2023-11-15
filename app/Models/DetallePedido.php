<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallePedido
 * 
 * @property int $id
 * @property int $cantidad
 * @property float $precio
 * @property int $proveedorID
 * @property int $productoID
 * @property int $pedidoID
 * 
 * @property PedidoProducto $pedido_producto
 * @property Producto $producto
 * @property Proveedor $proveedor
 *
 * @package App\Models
 */
class DetallePedido extends Model
{
	protected $table = 'detalle_pedido';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'precio' => 'float',
		'proveedorID' => 'int',
		'productoID' => 'int',
		'pedidoID' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'precio',
		'proveedorID',
		'productoID',
		'pedidoID'
	];

	public function pedido_producto()
	{
		return $this->belongsTo(PedidoProducto::class, 'pedidoID');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'productoID');
	}

	public function proveedor()
	{
		return $this->belongsTo(Proveedor::class, 'proveedorID');
	}
}
