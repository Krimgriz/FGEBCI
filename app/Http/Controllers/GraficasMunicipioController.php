<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GraficasMunicipioController extends Controller
{
    public function urlGraficasMunicipio(Request $request){
        return redirect('estadisticas/municipio/'.$request->municipio.'/'.$request->yearmunicipio);
    }

    public function graficaMunicipio($municipio,$year){
    	
	    
        $GraficaEne = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
        	->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereYear('fechaInicio', '=', $year)
            ->whereMonth('fechaInicio', '=', 1)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaFeb = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 2)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaMar = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 3)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaAbr = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 4)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaMay = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 5)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaJun = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 6)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaJul = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 7)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaAgo = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 8)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaSep = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 9)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaOct = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 10)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaNov = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 11)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();

        $GraficaDic = DB::table('carpeta')
        	->join('tipif_delito','carpeta.id','=','tipif_delito.idCarpeta')
        	->join('domicilio','domicilio.id','=','tipif_delito.idDomicilio')
        	->join('cat_municipio','domicilio.idMunicipio','=','cat_municipio.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 12)
            ->whereYear('fechaInicio', '=', $year)
            ->where('cat_municipio.id','=', $municipio)
            ->get();
        $Nombre = DB::table('cat_municipio')
            ->select('nombre')
            ->where('cat_municipio.id','=', $municipio)
            ->get();
           
        $tipo2='';
        $tipo='incidencia delictiva en el municipio de '.$Nombre[0]->nombre;
            
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
