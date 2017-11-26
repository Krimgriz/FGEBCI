<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use DB;

class PersonasInvolucradasController extends Controller
{
    public function index()
    {
        return view('busquedas.persona');
    }

    public function anyData()
    {
        $data = DB::table('variables_persona')
            ->join('persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('extra_denunciado', 'extra_denunciado.idVariablesPersona', '=', 'variables_persona.id')
            ->join('acusacion', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('carpeta', 'acusacion.idCarpeta', '=', 'carpeta.id')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'carpeta.numCarpeta', 'unidad.region', 'unidad.nombre as unidad')
            ->get();
        /*

        $data = DB::table('carpeta')
            ->join('tipif_delito', 'tipif_delito.idCarpeta', '=', 'carpeta.id')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->join('domicilio', 'tipif_delito.idDomicilio', '=', 'domicilio.id')
            ->join('variables_persona', 'domicilio.id', '=', 'variables_persona.idDomicilio')
            ->join('persona', 'variables_persona.idPersona', '=', 'persona.id') 
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'carpeta.numCarpeta', 'unidad.region', 'unidad.nombre as unidad')
            ->get();
        */
    	return Datatables::of($data)->make(true);
    }
}
