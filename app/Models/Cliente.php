<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nombre
 * @property Carbon $fecha_nac
 * @property int $ci
 * 
 * @property Collection|Factura[] $facturas
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'cliente';
	public $timestamps = false;

	protected $casts = [
		'fecha_nac' => 'datetime',
		'ci' => 'int'
	];

	protected $fillable = [
		'nombre',
		'fecha_nac',
		'ci'
	];

	public function facturas()
	{
		return $this->hasMany(Factura::class, 'clienteID');
	}
}
