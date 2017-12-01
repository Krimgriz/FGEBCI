<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use DB;

class NumeroCarpetaController extends Controller
{
    public function index()
    {
        return view('busquedas.numcarpeta');
    }

    public function anyData()
    {
    	$data = DB::table('carpeta')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->join('users', 'users.id', '=', 'carpeta.idFiscal')
            ->join('acusacion', 'carpeta.id', '=', 'acusacion.idCarpeta')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->select('carpeta.id', 'carpeta.numCarpeta', 'carpeta.fechaInicio', 'unidad.nombre as unidad', 'unidad.region', 'users.numFiscal', 'cat_delito.nombre as delito')
            ->get();
    	return Datatables::of($data)->make(true);
    }
}
