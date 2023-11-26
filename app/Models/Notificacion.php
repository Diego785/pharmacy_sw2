<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notificacion
 * 
 * @property int $id
 * @property string $encabezado
 * @property string $mensaje
 * @property Carbon $fecha_hora
 * @property int $pedido_ProductoID
 * @property int $usuarioID
 * 
 * @property PedidoProducto $pedido_producto
 * @property User $user
 *
 * @package App\Models
 */
class Notificacion extends Model
{
	protected $table = 'notificacion';
	public $timestamps = false;

	protected $casts = [
		'fecha_hora' => 'datetime',
		'pedido_ProductoID' => 'int',
		'usuarioID' => 'int'
	];

	protected $fillable = [
		'encabezado',
		'mensaje',
		'fecha_hora',
		'pedido_ProductoID',
		'usuarioID'
	];

	public function pedido_producto()
	{
		return $this->belongsTo(PedidoProducto::class, 'pedido_ProductoID');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'usuarioID');
	}
}
