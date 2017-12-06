<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class GraficasController extends Controller
{
    public function graficaIniciadas(Request $request){

        //dd($request->year);
        $GraficaIniciadasEne = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 1)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasFeb = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 2)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasMar = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 3)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasAbr = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 4)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasMay = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 5)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasJun = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 6)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasJul = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 7)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasAgo = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 8)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasSep = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 9)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasOct = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 10)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasNov = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 11)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        $GraficaIniciadasDic = DB::table('carpeta')
            ->select('carpeta.id','carpeta.estadoCarpeta')
            ->whereMonth('fechaInicio', '>=', 12)
            ->whereYear('created_at', '=', $request->year)
            ->get();

        //dd($GraficaIniciadas);
        /*
        */

        //$data = ['DatosUnidad' => $DatosUnidad, 'DatosDelitos' => $DatosDelitos, 'DatosAgrabiado' => $DatosAgrabiado, 'DatosImputado' => $DatosImputado, 'DatosVehiculos' => $DatosVehiculos, 'DatosEmpresaAgrabiado' => $DatosEmpresaAgrabiado, 'DatosEmpresaImputado' => $DatosEmpresaImputado];

        //return view('reporte.detalle')->with('DatosUnidad',$DatosUnidad);
    }
    
}
