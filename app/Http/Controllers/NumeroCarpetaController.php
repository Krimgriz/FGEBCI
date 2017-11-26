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
            ->select('carpeta.id', 'carpeta.numCarpeta', 'unidad.nombre as unidad', 'unidad.region', 'users.nombres', 'users.primerAp', 'users.segundoAp')
            ->get();
    	return Datatables::of($data)->make(true);
    }
}
