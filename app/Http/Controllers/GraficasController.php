<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GraficasController extends Controller
{
    /*
    public function selectColonia(Request $request){
        $colonia = DB::table('cat_colonia')
            ->select('nombre','id')
            ->where('idMunicipio','=',$request->id)
            ->get();

            return response()->json($colonia);
            
        
    }
    */
    public function selectColonia(Request $request,$id){
        $colonia = DB::table('cat_colonia')
            ->select('nombre','id')
            ->where('idMunicipio','=',$id)
            ->get();

            return response()->json($colonia);
    }    

    public function selectUnidad(Request $request,$region){
        $unidades = DB::table('unidad')
            ->select('nombre','id')
            ->where('region','=',$region)
            ->get();

            return response()->json($unidades);
    }

    public function selectformulario(){
        $delitos = DB::table('cat_delito')
            ->join('tipif_delito','cat_delito.id','=','tipif_delito.idDelito')
            ->select('cat_delito.id as id','cat_delito.nombre as nombre')
            ->pluck('nombre','id');

        $etnia = DB::table('cat_etnia')
            ->select('id','nombre')
            ->pluck('nombre','id');

        $municipio = DB::table('cat_municipio')
            ->select('id','nombre')
            ->where('idEstado','=',30)
            ->pluck('nombre','id');

        return view('estadisticas.formulariosEstadistica')
            ->with('delitos',$delitos)
            ->with('etnia',$etnia)
            ->with('municipio',$municipio);
    }

    
}
