<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carpeta extends Model
{
    public $table = 'carpeta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idUnidad',
        'idFiscal',
        'numCarpeta',
        'fechaInicio',
        'conDetenido',
        'esRelevante',
        'estadoCarpeta',
        'horaIntervencion',
        'descripcionHechos',
        'npd',
        'numIph',
        'fechaIph',
        'narracionIph',
        'ipTipoDeterminacion',
        'fechaDeterminacion'        
    ];
}
