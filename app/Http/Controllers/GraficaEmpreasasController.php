<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class GraficaEmpreasasController extends Controller
{

	public function urlGraficasEmpresa(Request $request){
        return redirect('estadisticas/empresas/'.$request->yearEmpresa);
    }

    public function graficaEmpresas($year){
    	$tipo2='Empresas';
	    $tipo='incidencia delictiva por parte de Empresas';
        $GraficaEne = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereYear('fechaInicio', '=', $year)
            ->whereMonth('fechaInicio', '=', 1)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaFeb = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 2)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaMar = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 3)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaAbr = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 4)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaMay = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 5)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaJun = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 6)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaJul = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 7)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaAgo = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 8)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaSep = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 9)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaOct = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 10)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaNov = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 11)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();

        $GraficaDic = DB::table('carpeta')
        	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
        	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
        	->join('persona','variables_persona.idPersona','=','persona.id')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '=', 12)
            ->whereYear('fechaInicio', '=', $year)
            ->where('esEmpresa','=', 1)
            ->get();
        
            
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
