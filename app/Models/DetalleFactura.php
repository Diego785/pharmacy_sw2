<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleFactura
 * 
 * @property int $cantidad
 * @property float $subtotal
 * @property float $precio_u
 * @property int $productoID
 * @property int $facturaID
 * 
 * @property Factura $factura
 * @property Producto $producto
 *
 * @package App\Models
 */
class DetalleFactura extends Model
{
	protected $table = 'detalle_factura';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'subtotal' => 'float',
		'precio_u' => 'float',
		'productoID' => 'int',
		'facturaID' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'subtotal',
		'precio_u',
		'productoID',
		'facturaID'
	];

	public function factura()
	{
		return $this->belongsTo(Factura::class, 'facturaID');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'productoID');
	}
}
