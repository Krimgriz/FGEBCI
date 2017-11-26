<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use DB;

class VehiculosController extends Controller
{
    public function index()
    {
        return view('busquedas.vehiculo');
    }

    public function anyData()
    {
    	$data = DB::table('vehiculo')
            ->join('cat_marca', 'cat_marca.id', '=', 'vehiculo.idMarca')
            ->join('cat_submarca', 'cat_submarca.id', '=', 'vehiculo.idSubmarca')
            ->join('cat_estado', 'cat_estado.id', '=', 'vehiculo.idEstado')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'vehiculo.idTipifDelito')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->join('carpeta', 'carpeta.id', '=', 'tipif_delito.idCarpeta')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'carpeta.numCarpeta', 'unidad.nombre as unidad', 'vehiculo.placas', 'vehiculo.modelo', 'cat_marca.nombre as marca', 'vehiculo.numSerie', 'vehiculo.status', 'cat_estado.nombre as estado')
            ->get();
    	return Datatables::of($data)->make(true);
    }
}
