<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GraficasRegionController extends Controller
{

	public function urlGraficasRegion(Request $request){
        return redirect('estadisticas/region/'.$request->region.'/'.$request->yearregion);
    }

    public function graficaRegion($region,$year){
    	
    	$GraficaEne = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereYear('fechaInicio', '=', $year)
            ->whereMonth('fechaInicio', '=', 1)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaFeb = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 2)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaMar = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 3)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaAbr = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 4)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaMay = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 5)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaJun = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 6)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaJul = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 7)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaAgo = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 8)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaSep = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 9)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaOct = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 10)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaNov = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 11)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $GraficaDic = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 12)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.region','=', $region)
            ->get();

        $Nombre = $region;
           
        $tipo2='Carpetas';
        $tipo='Carpetas de investigación Iniciadas en la region de '.$Nombre;
            
        $Ene=count($GraficaEne);
        $Feb=count($GraficaFeb);
        $Mar=count($GraficaMar);
        $Abr=count($GraficaAbr);
        $May=count($GraficaMay);
        $Jun=count($GraficaJun);
        $Jul=count($GraficaJul);
        $Ago=count($GraficaAgo);
        $Sep=count($GraficaSep);
        $Oct=count($GraficaOct);
        $Nov=count($GraficaNov);
        $Dic=count($GraficaDic);
        
        return view('estadisticas.grafica1')
            ->with('Ene',$Ene)
            ->with('Feb',$Feb)
            ->with('Mar',$Mar)
            ->with('Abr',$Abr)
            ->with('May',$May)
            ->with('Jun',$Jun)
            ->with('Jul',$Jul)
            ->with('Ago',$Ago)
            ->with('Sep',$Sep)
            ->with('Oct',$Oct)
            ->with('Nov',$Nov)
            ->with('Dic',$Dic)
            ->with('tipo',$tipo)
            ->with('year',$year)
            ->with('tipo2',$tipo2);
    }
}
