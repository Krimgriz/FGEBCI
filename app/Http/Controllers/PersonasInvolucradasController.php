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
        /*
        */
        $data1 = DB::table('variables_persona')
            ->join('domicilio', 'domicilio.id', '=', 'variables_persona.idDomicilio')
            ->join('cat_municipio', 'domicilio.idMunicipio', '=', 'cat_municipio.id')
            ->join('persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('extra_denunciado', 'extra_denunciado.idVariablesPersona', '=', 'variables_persona.id')
            ->join('acusacion', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('carpeta', 'acusacion.idCarpeta', '=', 'carpeta.id')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.sexo', 'cat_municipio.nombre as municipio', DB::raw('(CASE WHEN acusacion.idDenunciado IS NOT NULL THEN "Denunciado"END) AS calidadJuridica'));

        $data = DB::table('variables_persona')
            ->join('domicilio', 'domicilio.id', '=', 'variables_persona.idDomicilio')
            ->join('cat_municipio', 'domicilio.idMunicipio', '=', 'cat_municipio.id')
            ->join('persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('extra_denunciante', 'extra_denunciante.idVariablesPersona', '=', 'variables_persona.id')
            ->join('acusacion', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('carpeta', 'acusacion.idCarpeta', '=', 'carpeta.id')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.sexo', 'cat_municipio.nombre as municipio', DB::raw('(CASE WHEN acusacion.idDenunciante IS NOT NULL THEN "Denunciante" END) AS calidadJuridica'))
            ->union($data1)
            ->get();
    	


        return Datatables::of($data)->make(true);
    }
}
