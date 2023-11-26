<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 * 
 * @property int $id
 * @property Carbon $fecha_ingreso
 * @property int $cantidad_ingresada
 * @property float $total_costo
 * 
 * @property Collection|DetalleInventario[] $detalle_inventarios
 *
 * @package App\Models
 */
class Inventario extends Model
{
	protected $table = 'inventario';
	public $timestamps = false;

	protected $casts = [
		'fecha_ingreso' => 'datetime',
		'cantidad_ingresada' => 'int',
		'total_costo' => 'float'
	];

	protected $fillable = [
		'fecha_ingreso',
		'cantidad_ingresada',
		'total_costo'
	];

	public function detalle_inventarios()
	{
		return $this->hasMany(DetalleInventario::class, 'inventarioID');
	}
}
