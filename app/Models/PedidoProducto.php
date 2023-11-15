<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PedidoProducto
 * 
 * @property int $id
 * @property Carbon $fecha_pedido
 * @property float $total
 * 
 * @property Collection|DetallePedido[] $detalle_pedidos
 * @property Collection|Notificacion[] $notificacions
 *
 * @package App\Models
 */
class PedidoProducto extends Model
{
	protected $table = 'pedido_producto';
	public $timestamps = false;

	protected $casts = [
		'fecha_pedido' => 'datetime',
		'total' => 'float'
	];

	protected $fillable = [
		'fecha_pedido',
		'total'
	];

	public function detalle_pedidos()
	{
		return $this->hasMany(DetallePedido::class, 'pedidoID');
	}

	public function notificacions()
	{
		return $this->hasMany(Notificacion::class, 'pedido_ProductoID');
	}
}
