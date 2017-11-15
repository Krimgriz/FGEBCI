<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraDenunciante extends Model
{
    public $table = 'extra_denunciante';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idVariablesPersona',
        'idNotificaciones',
        'idAbogado',
        'conoceAlDenunciado'
    ];
    public function variablesPersona()
    {
       return $this->belongsTo('app/Models/VariablesPersona');
    }

    public function extraAbogado()
    {
       return $this->hasOne('app/Models/ExtraAbogado');
    }
}
