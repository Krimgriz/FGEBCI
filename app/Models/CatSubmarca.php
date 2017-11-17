<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatSubmarca extends Model
{
    protected $table = 'cat_submarca';

    protected $fillable = [
        'id', 'idMarca', 'nombre',
    ];

    public function vehiculos(){
        return $this->hasMany('App\Models\Vehiculo'):
    }

    public function marca(){
        return $this->belongsTo('App\Models\CatMarca'):
    }
}