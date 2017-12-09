<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GraficasEtniaController extends Controller
{
    public function urlGraficasEtnia(Request $request){
        return redirect('estadisticas/etnia/'.$request->tipoetnia.'/'.$request->etnia.'/'.$request->yearetnia);
    }

    public function graficaEtnia($tipo,$etnia,$year){
        if ($tipo=='todos') {
            $var1='Denunciados';
            $GraficaEne1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaFeb1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaMar1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaAbr1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaMay1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaJun1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaJul1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaAgo1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaSep1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaOct1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaNov1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaDic1 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $var2='Denunciantes';
                
            $GraficaEne2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaFeb2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaMar2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaAbr2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaMay2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaJun2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaJul2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaAgo2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaSep2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaOct2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaNov2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaDic2 = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $NombreEtnia = DB::table('cat_etnia')
                ->select('nombre as etnia')
                ->where('cat_etnia.id','=', $etnia)
                ->get();
               
            

            $nombre='Información de incidencia delictiva de la Etnia '.$NombreEtnia[0]->etnia;

            $Ene1=count($GraficaEne1);
            $Feb1=count($GraficaFeb1);
            $Mar1=count($GraficaMar1);
            $Abr1=count($GraficaAbr1);
            $May1=count($GraficaMay1);
            $Jun1=count($GraficaJun1);
            $Jul1=count($GraficaJul1);
            $Ago1=count($GraficaAgo1);
            $Sep1=count($GraficaSep1);
            $Oct1=count($GraficaOct1);
            $Nov1=count($GraficaNov1);
            $Dic1=count($GraficaDic1);

            $Ene2=count($GraficaEne2);
            $Feb2=count($GraficaFeb2);
            $Mar2=count($GraficaMar2);
            $Abr2=count($GraficaAbr2);
            $May2=count($GraficaMay2);
            $Jun2=count($GraficaJun2);
            $Jul2=count($GraficaJul2);
            $Ago2=count($GraficaAgo2);
            $Sep2=count($GraficaSep2);
            $Oct2=count($GraficaOct2);
            $Nov2=count($GraficaNov2);
            $Dic2=count($GraficaDic2);


            return view('estadisticas.grafica2')
                ->with('Ene1',$Ene1)
                ->with('Feb1',$Feb1)
                ->with('Mar1',$Mar1)
                ->with('Abr1',$Abr1)
                ->with('May1',$May1)
                ->with('Jun1',$Jun1)
                ->with('Jul1',$Jul1)
                ->with('Ago1',$Ago1)
                ->with('Sep1',$Sep1)
                ->with('Oct1',$Oct1)
                ->with('Nov1',$Nov1)
                ->with('Dic1',$Dic1)
                ->with('Ene2',$Ene2)
                ->with('Feb2',$Feb2)
                ->with('Mar2',$Mar2)
                ->with('Abr2',$Abr2)
                ->with('May2',$May2)
                ->with('Jun2',$Jun2)
                ->with('Jul2',$Jul2)
                ->with('Ago2',$Ago2)
                ->with('Sep2',$Sep2)
                ->with('Oct2',$Oct2)
                ->with('Nov2',$Nov2)
                ->with('Dic2',$Dic2)
                ->with('year',$year)
                ->with('nombre',$nombre)
                ->with('var1',$var1)
                ->with('var2',$var2);
        }
        
        if ($tipo=='denunciados') {
            $GraficaEne = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaFeb = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaMar = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaAbr = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaMay = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaJun = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaJul = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaAgo = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaSep = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaOct = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaNov = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaDic = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $NombreEtnia = DB::table('cat_etnia')
                ->select('nombre as etnia')
                ->where('cat_etnia.id','=', $etnia)
                ->get();
               
            $tipo2='Denunciados';
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
	    
        if ($tipo=='denunciantes') {
            $GraficaEne = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaFeb = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaMar = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaAbr = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaMay = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaJun = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaJul = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaAgo = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaSep = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaOct = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaNov = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $GraficaDic = DB::table('carpeta')
                ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                ->join('persona','persona.id','=','variables_persona.idPersona')
                ->join('cat_etnia','persona.idEtnia','=','cat_etnia.id')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->where('cat_etnia.id','=', $etnia)
                ->where('esEmpresa','=', 0)
                ->get();

            $NombreEtnia = DB::table('cat_etnia')
                ->select('nombre as etnia')
                ->where('cat_etnia.id','=', $etnia)
                ->get();
               
            $tipo2='Denunciantes';
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
}
