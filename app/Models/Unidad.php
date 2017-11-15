<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    public $table = 'unidad';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre',
        'direccion',
        'latitud',
        'longitud',
        'telefono',
        'distrito',
        'region'
    ];
}
