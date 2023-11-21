<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 * 
 * @property int $id
 * @property int $nit
 * @property Carbon $fecha
 * @property float $total
 * @property string $nota
 * @property string $tipo
 * @property int $clienteID
 * @property int $usuarioID
 * 
 * @property Cliente $cliente
 * @property User $user
 * @property DetalleFactura $detalle_factura
 * @property Collection|NotaDevolucion[] $nota_devolucion
 *
 * @package App\Models
 */
class Factura extends Model
{
	protected $table = 'factura';
	public $timestamps = false;

	protected $casts = [
		'nit' => 'int',
		'fecha' => 'datetime',
		'total' => 'float',
		'clienteID' => 'int',
		'usuarioID' => 'int'
	];

	protected $fillable = [
		'nit',
		'fecha',
		'total',
		'nota',
		'tipo',
		'clienteID',
		'usuarioID'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'clienteID');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'usuarioID');
	}

	public function detalle_factura()
	{
		return $this->hasOne(DetalleFactura::class, 'facturaID');
	}

	public function nota_devolucion()
	{
		return $this->hasMany(NotaDevolucion::class, 'facturaID');
	}
}
