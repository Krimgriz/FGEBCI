<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GraficasEtniaController extends Controller
{
    public function urlGraficasEtnia(Request $request){
        return redirect('estadisticas/etnia/'.$request->etnia.'/'.$request->yearetnia);
    }

    public function graficaEtnia($etnia,$year){
    	
	    
        $GraficaEne = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereYear('fechaInicio', '=', $year)
            ->whereMonth('fechaInicio', '=', 1)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaFeb = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 2)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaMar = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 3)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaAbr = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 4)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaMay = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 5)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaJun = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 6)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaJul = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 7)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaAgo = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 8)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaSep = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 9)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaOct = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 10)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaNov = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 11)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();

        $GraficaDic = DB::table('carpeta')
        	->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
        	->join('persona','persona.id','=','variables_persona.idPersona')
        	->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 12)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_etnia.id','=', $etnia)
            ->get();
        $NombreEtnia = DB::table('cat_etnia')
            ->select('nombre as etnia')
            ->where('cat_etnia.id','=', $etnia)
            ->get();
           
        $tipo2='Personas';
        $tipo='Información de incidencia delictiva de la Etnia '.$NombreEtnia[0]->etnia;
            
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
