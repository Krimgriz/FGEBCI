<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GraficasController extends Controller
{

    public function selectformulario(){
        $delitos = DB::table('cat_delito')
            ->select('id','nombre')
            ->pluck('nombre','id');

        $etnia = DB::table('cat_etnia')
            ->select('id','nombre')
            ->pluck('nombre','id');

        $municipio = DB::table('cat_municipio')
            ->select('id','nombre')
            ->where('idEstado','=',30)
            ->pluck('nombre','id');

        $unidad = DB::table('unidad')
            ->select('id','nombre')
            ->pluck('nombre','id');

        $region = DB::table('unidad')
            ->select('id','region')
            ->pluck('region','id');

        $colonia = DB::table('cat_colonia')
            ->select('id','nombre')
            ->pluck('nombre','id');


        return view('estadisticas.formulariosEstadistica')
            ->with('delitos',$delitos)
            ->with('etnia',$etnia)
            ->with('municipio',$municipio)
            ->with('unidad',$unidad)
            ->with('colonia',$colonia);
    }

    
}
