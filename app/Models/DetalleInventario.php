<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleInventario
 * 
 * @property int $id
 * @property int $cantidad
 * @property int $numero_lote
 * @property float $precio_compra
 * @property Carbon $fecha_venc_lote
 * @property int $proveedorID
 * @property int $productoID
 * @property int $inventarioID
 * 
 * @property Inventario $inventario
 * @property Producto $producto
 * @property Proveedor $proveedor
 *
 * @package App\Models
 */
class DetalleInventario extends Model
{
	protected $table = 'detalle_inventario';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'numero_lote' => 'int',
		'precio_compra' => 'float',
		'fecha_venc_lote' => 'datetime',
		'proveedorID' => 'int',
		'productoID' => 'int',
		'inventarioID' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'numero_lote',
		'precio_compra',
		'fecha_venc_lote',
		'proveedorID',
		'productoID',
		'inventarioID'
	];

	public function inventario()
	{
		return $this->belongsTo(Inventario::class, 'inventarioID');
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
