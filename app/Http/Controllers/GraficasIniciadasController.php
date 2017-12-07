<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GraficasIniciadasController extends Controller
{
    public function urlGraficasIniciadas(Request $request){
        return redirect('estadistica/'.$request->tipo.'/'.$request->year);
    }

    public function graficaIniciadas($tipo,$year){
        $tipo2='Carpetas';
        if ($tipo=='iniciadas') {
            $tipo='Carpetas de Investigación iniciadas';
            $GraficaIniciadasEne = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta','fechaInicio')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->get();
        }

        if ($tipo=='conDetenido') {
            $tipo='Carpetas de Investigación iniciadas con detenido';
            $GraficaIniciadasEne = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta','fechaInicio')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 1)
                ->get();
        }

        if ($tipo=='sinDetenido') {
            $tipo='Carpetas de Investigación iniciadas sin detenido';
            $GraficaIniciadasEne = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta','fechaInicio')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->where('conDetenido', '=', 0)
                ->get();
        }


        $Ene=count($GraficaIniciadasEne);
        $Feb=count($GraficaIniciadasFeb);
        $Mar=count($GraficaIniciadasMar);
        $Abr=count($GraficaIniciadasAbr);
        $May=count($GraficaIniciadasMay);
        $Jun=count($GraficaIniciadasJun);
        $Jul=count($GraficaIniciadasJul);
        $Ago=count($GraficaIniciadasAgo);
        $Sep=count($GraficaIniciadasSep);
        $Oct=count($GraficaIniciadasOct);
        $Nov=count($GraficaIniciadasNov);
        $Dic=count($GraficaIniciadasDic);
        //dd($GraficaIniciadas);
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
