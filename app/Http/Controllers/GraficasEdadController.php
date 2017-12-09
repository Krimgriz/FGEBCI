<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class GraficasEdadController extends Controller
{
    public function urlGraficasEdad(Request $request){
        return redirect('estadistica/edad/'.$request->tipoedad.'/'.$request->edad.'/'.$request->yearedad);
    }

    public function graficaEdades($tipo,$rango,$year){
        if ($tipo=='todos') {
            $var1='Denunciados';
            $var2='Denunciantes';
            if ($rango=='menores12') {
                $nombre='incidencia delictiva por edad de menores de 12 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();
            }

            if ($rango=='12a17') {
                $nombre='incidencia delictiva por edad de 12 a 17 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();
            }

            if ($rango=='18a25') {
                $nombre='incidencia delictiva por edad de 18 a 25 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

            }

            if ($rango=='26a30') {
                $nombre='incidencia delictiva por edad de 26 a 30 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [30, 26])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [30, 26])
                    ->get();
            }

            if ($rango=='31a35') {
                $nombre='incidencia delictiva por edad de 31 a 35 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();
            }

            if ($rango=='36a40') {
                $nombre='incidencia delictiva por edad de 36 a 40 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();
            }

            if ($rango=='41a45') {
                $nombre='incidencia delictiva por edad de 41 a 45 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();
            }

            if ($rango=='46a50') {
                $nombre='incidencia delictiva por edad de 46 a 50 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta', 'variables_persona.edad')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta', 'variables_persona.edad')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta', 'variables_persona.edad')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta', 'variables_persona.edad')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();
            }

            if ($rango=='51a55') {
                $nombre='incidencia delictiva por edad de 51 a 55 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();
            }

            if ($rango=='56a60') {
                $nombre='incidencia delictiva por edad de 56 a 60 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();
            }

            if ($rango=='mayores60') {
                $nombre='incidencia delictiva por edad de mayores de 60 años';
                $GraficaEne1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaFeb1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaMar1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaAbr1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaMay1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaJun1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaJul1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaAgo1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaSep1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaOct1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaNov1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaDic1 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaEne2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaFeb2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaMar2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaAbr2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaMay2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaJun2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaJul2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaAgo2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaSep2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaOct2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaNov2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaDic2 = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();
            }       
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

            $var2='Denunciantes';
        }
        if ($tipo=='denunciados') {
            $tipo2='Denunciados';
            if ($rango=='menores12') {
                $rango='incidencia delictiva por edad de menores de 12 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();
            }


            if ($rango=='12a17') {
                $rango='incidencia delictiva por edad de 12 a 17 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();
            }

            if ($rango=='18a25') {
                $rango='incidencia delictiva por edad de 18 a 25 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();
            }

            if ($rango=='26a30') {
                $rango='incidencia delictiva por edad de 26 a 30 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [30, 26])
                    ->get();
            }

            if ($rango=='31a35') {
                $rango='incidencia delictiva por edad de 31 a 35 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();
            }

            if ($rango=='36a40') {
                $rango='incidencia delictiva por edad de 36 a 40 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();
            }

            if ($rango=='41a45') {
                $rango='incidencia delictiva por edad de 41 a 45 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();
            }

            if ($rango=='46a50') {
                $rango='incidencia delictiva por edad de 46 a 50 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta', 'variables_persona.edad')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta', 'variables_persona.edad')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

            }

            if ($rango=='51a55') {
                $rango='incidencia delictiva por edad de 51 a 55 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();
            }

            if ($rango=='56a60') {
                $rango='incidencia delictiva por edad de 56 a 60 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();
            }

            if ($rango=='mayores60') {
                $rango='incidencia delictiva por edad de mayores de 60 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciado','variables_persona.id','=','extra_denunciado.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();
            }       
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
            $tipo=$rango;
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
            $tipo2='Denunciantes';
            if ($rango=='menores12') {
                $rango='incidencia delictiva por edad de menores de 12 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [1, 11])
                    ->get();
            }


            if ($rango=='12a17') {
                $rango='incidencia delictiva por edad de 12 a 17 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [12, 17])
                    ->get();
            }

            if ($rango=='18a25') {
                $rango='incidencia delictiva por edad de 18 a 25 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [18, 25])
                    ->get();
            }

            if ($rango=='26a30') {
                $rango='incidencia delictiva por edad de 26 a 30 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [26, 30])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [30, 26])
                    ->get();
            }

            if ($rango=='31a35') {
                $rango='incidencia delictiva por edad de 31 a 35 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [31, 35])
                    ->get();
            }

            if ($rango=='36a40') {
                $rango='incidencia delictiva por edad de 36 a 40 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [36, 40])
                    ->get();
            }

            if ($rango=='41a45') {
                $rango='incidencia delictiva por edad de 41 a 45 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [41, 45])
                    ->get();
            }

            if ($rango=='46a50') {
                $rango='incidencia delictiva por edad de 46 a 50 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta', 'variables_persona.edad')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta', 'variables_persona.edad')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [46, 50])
                    ->get();

            }

            if ($rango=='51a55') {
                $rango='incidencia delictiva por edad de 51 a 55 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [51, 55])
                    ->get();
            }

            if ($rango=='56a60') {
                $rango='incidencia delictiva por edad de 56 a 60 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [56, 60])
                    ->get();
            }

            if ($rango=='mayores60') {
                $rango='incidencia delictiva por edad de mayores de 60 años';
                $GraficaEne = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereMonth('fechaInicio', '=', 1)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaFeb = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 2)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaMar = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 3)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaAbr = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 4)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaMay = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 5)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaJun = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 6)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaJul = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 7)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaAgo = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 8)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaSep = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 9)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaOct = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 10)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaNov = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 11)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();

                $GraficaDic = DB::table('carpeta')
                    ->join('variables_persona','carpeta.id','=','variables_persona.idCarpeta')
                    ->join('extra_denunciante','variables_persona.id','=','extra_denunciante.idVariablesPersona')
                    ->join('persona','variables_persona.idPersona','=','persona.id')
                    ->select('carpeta.id','carpeta.estadoCarpeta')
                    ->whereMonth('fechaInicio', '=', 12)
                    ->whereYear('fechaInicio', '=', $year)
                    ->where('esEmpresa','=', 0)
                    ->whereBetween('edad', [61, 150])
                    ->get();
            }       
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
            $tipo=$rango;
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
