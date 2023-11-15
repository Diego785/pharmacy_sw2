<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id
 * @property string $nombre_producto
 * @property string $descripcion
 * @property float $precio_venta
 * @property int $cantidad_stock
 * @property string $cod_barra
 * @property string $imagen
 * @property string $adicional
 * @property Carbon $fecha_vencimiento
 * @property int $existencia_minimo
 * @property int $categoriaID
 * 
 * @property Categorium $categorium
 * @property DetalleFactura $detalle_factura
 * @property Collection|DetalleInventario[] $detalle_inventarios
 * @property Collection|DetalleNotaBaja[] $detalle_nota_bajas
 * @property Collection|DetalleNotaDev[] $detalle_nota_devs
 * @property Collection|DetallePedido[] $detalle_pedidos
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'producto';
	public $timestamps = false;

	protected $casts = [
		'precio_venta' => 'float',
		'cantidad_stock' => 'int',
		'fecha_vencimiento' => 'datetime',
		'existencia_minimo' => 'int',
		'categoriaID' => 'int'
	];

	protected $fillable = [
		'nombre_producto',
		'descripcion',
		'precio_venta',
		'cantidad_stock',
		'cod_barra',
		'imagen',
		'adicional',
		'fecha_vencimiento',
		'existencia_minimo',
		'categoriaID'
	];

	public function categorium()
	{
		return $this->belongsTo(Categorium::class, 'categoriaID');
	}

	public function detalle_factura()
	{
		return $this->hasOne(DetalleFactura::class, 'productoID');
	}

	public function detalle_inventarios()
	{
		return $this->hasMany(DetalleInventario::class, 'productoID');
	}

	public function detalle_nota_bajas()
	{
		return $this->hasMany(DetalleNotaBaja::class, 'productoID');
	}

	public function detalle_nota_devs()
	{
		return $this->hasMany(DetalleNotaDev::class, 'productoID');
	}

	public function detalle_pedidos()
	{
		return $this->hasMany(DetallePedido::class, 'productoID');
	}
}
