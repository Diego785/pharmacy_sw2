<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 * 
 * @property int $id
 * @property string $nombre
 * @property int $telefono
 * @property string $email
 * 
 * @property Collection|DetalleInventario[] $detalle_inventarios
 * @property Collection|DetallePedido[] $detalle_pedidos
 *
 * @package App\Models
 */
class Proveedor extends Model
{
	protected $table = 'proveedor';
	public $timestamps = false;

	protected $casts = [
		'telefono' => 'int'
	];

	protected $fillable = [
		'nombre',
		'telefono',
		'email'
	];

	public function detalle_inventarios()
	{
		return $this->hasMany(DetalleInventario::class, 'proveedorID');
	}

	public function detalle_pedidos()
	{
		return $this->hasMany(DetallePedido::class, 'proveedorID');
	}
}
