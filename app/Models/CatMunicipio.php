<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatMunicipio extends Model
{
    public $table = 'cat_municipio';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idEstado',
        'nombre'
    ];
}
