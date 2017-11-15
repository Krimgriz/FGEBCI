<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VariablesPersona extends Model
{
    public $table = 'variables_persona';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idPersona',
        'edad',
        'telefono',
        'motivoEstancia',
        'idOcupacion',
        'idEstadoCivil',
        'idEscolaridad',
        'idReligion',
        'idDomicilio',
        'docIdentificacion',
        'numDocIdentificacion',
        'lugarTrabajo',
        'idDomicilioTrabajo',
        'telefonoTrabajo',
        'representanteLegal',
    ];
}
