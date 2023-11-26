<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NotaBaja
 * 
 * @property int $id
 * @property Carbon $fecha_dada_baja
 * @property string $motivo
 * 
 * @property Collection|DetalleNotaBaja[] $detalle_nota_bajas
 *
 * @package App\Models
 */
class NotaBaja extends Model
{
	protected $table = 'nota_baja';
	public $timestamps = false;

	protected $casts = [
		'fecha_dada_baja' => 'datetime'
	];

	protected $fillable = [
		'fecha_dada_baja',
		'motivo'
	];

	public function detalle_nota_bajas()
	{
		return $this->hasMany(DetalleNotaBaja::class, 'bajaID');
	}
}
