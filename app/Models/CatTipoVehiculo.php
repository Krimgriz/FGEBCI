<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatTipoVehiculo extends Model
{
    public $table = 'cat_tipo_vehiculo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre',
        'idClaseVehiculo'
    ];
}
