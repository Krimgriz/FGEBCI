<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    protected $table = 'familiar';

    protected $fillable = [
        'id', 'idPersona', 'nombres', 'primerap', 'segundoAp', 'parentesco', 'idOcupacion',
    ];

    public function persona()
    {
        return $this->belongsTo('App\Models\Persona');
    }

    public function ocupacion()
    {
        return $this->belongsTo('App\Models\CatOcupacion');
    }
}
