<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Narracion extends Model
{
    public $table = 'narracion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idVariablesPersona',
        'narracion'
    ];
}
