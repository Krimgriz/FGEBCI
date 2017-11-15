<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acumulacion extends Model
{
    public $table = 'acumulacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idCarpetaP',
        'idCarpetaP'
    ];
}
