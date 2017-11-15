<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acusacion extends Model
{
    public $table = 'acusacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idCarpeta',
        'idDenunciante',
        'idTipifDelito',
        'idDenunciado'
    ];
}
