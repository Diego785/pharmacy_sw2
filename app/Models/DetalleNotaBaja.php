<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleNotaBaja
 * 
 * @property int $id
 * @property int $cantidad
 * @property string $observacion
 * @property int $productoID
 * @property int $bajaID
 * 
 * @property NotaBaja $nota_baja
 * @property Producto $producto
 *
 * @package App\Models
 */
class DetalleNotaBaja extends Model
{
	protected $table = 'detalle_nota_baja';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'productoID' => 'int',
		'bajaID' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'observacion',
		'productoID',
		'bajaID'
	];

	public function nota_baja()
	{
		return $this->belongsTo(NotaBaja::class, 'bajaID');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'productoID');
	}
}
