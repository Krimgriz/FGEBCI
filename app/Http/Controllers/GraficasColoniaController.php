<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GraficasColoniaController extends Controller
{
    public function urlGraficasColonia(Request $request){
        return redirect('estadisticas/colonia/'.$request->colonia.'/'.$request->yearcolonia);
    }

    public function graficaColonia($colonia,$year){
    	$GraficaEne = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 1)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaFeb = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 2)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaMar = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 3)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaAbr = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 4)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaMay = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 5)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaJun = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 6)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaJul = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 7)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaAgo = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 8)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaSep = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 9)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaOct = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 10)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaNov = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 11)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();

        $GraficaDic = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_colonia','domicilio.idColonia','=','cat_colonia.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 12)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_colonia.id','=', $colonia)
            ->get();
        $Nombre = DB::table('cat_colonia')
            ->join('cat_municipio','cat_colonia.idMunicipio','=','cat_municipio.id')
            ->select('cat_municipio.nombre as municipio', 'cat_colonia.nombre as colonia')
            ->where('cat_colonia.id','=', $colonia)
            ->get();
           
        $tipo2='';
        $tipo='incidencia delictiva en el municipio de '.$Nombre[0]->municipio.' en la colonia '.$Nombre[0]->colonia;
            
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
