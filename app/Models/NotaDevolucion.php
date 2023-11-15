<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NotaDevolucion
 *
 * @property $id
 * @property $motivo
 * @property $fecha_dev
 * @property $facturaID
 *
 * @property DetalleNotaDev[] $detalleNotaDevs
 * @property Factura $factura
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class NotaDevolucion extends Model
{
    
    static $rules = [
		'motivo' => 'required',
		'fecha_dev' => 'required',
		'facturaID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['motivo','fecha_dev','facturaID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleNotaDevs()
    {
        return $this->hasMany('App\Models\DetalleNotaDev', 'notadevID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factura()
    {
        return $this->hasOne('App\Models\Factura', 'id', 'facturaID');
    }
    

}
