<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleNotaDev
 * 
 * @property int $id
 * @property int $cantidad
 * @property string $observacion
 * @property int $productoID
 * @property int $notadevID
 * 
 * @property NotaDevolucion $nota_devolucions
 * @property Producto $producto
 *
 * @package App\Models
 */
class DetalleNotaDev extends Model
{
	protected $table = 'detalle_nota_dev';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'productoID' => 'int',
		'notadevID' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'observacion',
		'productoID',
		'notadevID'
	];

	public function nota_devolucions()
	{
		return $this->belongsTo(NotaDevolucion::class, 'notadevID');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'productoID');
	}
}
