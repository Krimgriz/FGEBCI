<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipifDelito extends Model
{
    public $table = 'tipif_delito';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idCarpeta',
        'idDelito',
        'conViolencia',
        'idTipoArma',
        'idArma',
        'modalidad',
        'formaComision',
        'fecha',
        'hora',
        'idZona',
        'idLugar',
        'idDomicilio',
        'entreCalle',
        'yCalle',
        'calleTrasera',
        'puntoReferencia'
    ];
}
