<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class GraficasDelitoController extends Controller
{
	

    public function urlGraficasDelito(Request $request){
        return redirect('estadisticas/delito/'.$request->delito.'/'.$request->yeardelito);
    }

    public function graficaDelito($delito,$year){
    	
	    
        $GraficaEne = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
        	->select('carpeta.id','carpeta.estadoCarpeta', 'cat_delito.nombre as delito')
            ->whereYear('fechaInicio', '=', $year)
            ->whereMonth('fechaInicio', '=', 1)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaFeb = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 2)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaMar = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 3)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaAbr = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 4)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaMay = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 5)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaJun = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 6)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaJul = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 7)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaAgo = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 8)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaSep = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 9)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaOct = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 10)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaNov = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 11)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();

        $GraficaDic = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('cat_delito','tipif_delito.idDelito','=','cat_delito.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 12)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_delito.id','=', $delito)
            ->get();
        $NombreDelito = DB::table('cat_delito')
            ->select('nombre as delito')
            ->where('cat_delito.id','=', $delito)
            ->get();
           
        $tipo2='Personas';
        $tipo='Informacion de incidencia delictiva de '.$NombreDelito[0]->delito;
            
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
