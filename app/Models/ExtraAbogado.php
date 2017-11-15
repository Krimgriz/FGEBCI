<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraAbogado extends Model
{
    public $table = 'extra_abogado';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idVariablesPersona',
        'cedulaProf',
        'sector',
        'correo'
    ];
}
