<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class GraficasEdadController extends Controller
{
    public function urlGraficasEdad(Request $request){
        return redirect('estadistica/edad/'.$request->edad.'/'.$request->yearedad);
    }

    public function graficaEdades($tipo,$year){
    	if ($tipo=='menores12') {
            $tipo='incidencia delictiva por edad de menores de 12 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [1, 11])
                ->get();
        }


        if ($tipo=='12a17') {
            $tipo='incidencia delictiva por edad de 12 a 17 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [12, 17])
                ->get();
        }

        if ($tipo=='18a25') {
            $tipo='incidencia delictiva por edad de 18 a 25 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [18, 25])
                ->get();
        }

        if ($tipo=='26a30') {
            $tipo='incidencia delictiva por edad de 26 a 30 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [26, 30])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [30, 26])
                ->get();
        }

        if ($tipo=='31a35') {
            $tipo='incidencia delictiva por edad de 31 a 35 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [31, 35])
                ->get();
        }

        if ($tipo=='36a40') {
            $tipo='incidencia delictiva por edad de 36 a 40 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [36, 40])
                ->get();
        }

        if ($tipo=='41a45') {
            $tipo='incidencia delictiva por edad de 41 a 45 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [41, 45])
                ->get();
        }

        if ($tipo=='46a50') {
            $tipo='incidencia delictiva por edad de 46 a 50 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta', 'variables_persona.edad')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta', 'variables_persona.edad')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [46, 50])
                ->get();

        }

        if ($tipo=='51a55') {
            $tipo='incidencia delictiva por edad de 51 a 55 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [51, 55])
                ->get();
        }

        if ($tipo=='56a60') {
            $tipo='incidencia delictiva por edad de 56 a 60 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [56, 60])
                ->get();
        }

		if ($tipo=='mayores60') {
            $tipo='incidencia delictiva por edad de mayores de 60 años';
            $GraficaIniciadasEne = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereYear('fechaInicio', '=', $year)
                ->whereMonth('fechaInicio', '=', 1)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasFeb = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 2)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasMar = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 3)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasAbr = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 4)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasMay = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 5)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasJun = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 6)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasJul = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 7)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasAgo = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 8)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasSep = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 9)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasOct = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 10)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasNov = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 11)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
                ->get();

            $GraficaIniciadasDic = DB::table('carpeta')
            	->join('extra_denunciado','carpeta.id','=','extra_denunciado.idCarpeta')
            	->join('variables_persona','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                ->select('carpeta.id','carpeta.estadoCarpeta')
                ->whereMonth('fechaInicio', '=', 12)
                ->whereYear('fechaInicio', '=', $year)
                ->whereBetween('edad', [61, 150])
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
        return view('estadisticas.graficaIniciadas')
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
            ->with('year',$year);
    }
}
