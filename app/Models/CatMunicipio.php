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


    public function personas(){
        return $this->hasMany('App\Models\Persona'):
    }

    public function estado(){
        return $this->belongsTo('App\Models\CatEstado'):
    }

    public function domicilios(){
        return $this->hasMany('App\Models\Domicilio'):
    }

    public function localidades(){
        return $this->hasMany('App\Models\CatLocalidad'):
    }

    public function codigosPostales(){
        return $this->hasMany('App\Models\CatCodigoPostal'):
    }    
}
