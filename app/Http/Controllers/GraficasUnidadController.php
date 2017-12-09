<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GraficasUnidadController extends Controller
{
    public function urlGraficasUnidad(Request $request){
        return redirect('estadisticas/unidad/'.$request->unidad.'/'.$request->yearunidad);
    }

    public function graficaUnidad($unidad,$year){
    	
	    
        $GraficaEne = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereYear('fechaInicio', '=', $year)
            ->whereMonth('fechaInicio', '=', 1)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaFeb = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 2)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaMar = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 3)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaAbr = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 4)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaMay = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 5)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaJun = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 6)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaJul = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 7)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaAgo = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 8)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaSep = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 9)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaOct = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 10)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaNov = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 11)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();

        $GraficaDic = DB::table('carpeta')
        	->join('unidad','carpeta.idUnidad','=','unidad.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 12)
            ->whereYear('fechaInicio', '=', $year)
            ->where('unidad.id','=', $unidad)
            ->get();
        $Nombre = DB::table('unidad')
            ->select('nombre')
            ->where('unidad.id','=', $unidad)
            ->get();
           
        $tipo2='Carpetas';
        $tipo='Carpetas de investigacion iniciadas en la '.$Nombre[0]->nombre;
            
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
        //dd($Grafica);
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
