<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use DB;

class VehiculosInvolucradosController extends Controller
{
    public function index()
    {
        return view('busquedas.vehiculoInvolucrado');
    }

    public function anyData()
    {
    	$data = DB::table('vehiculo')
            ->where('vehiculo.status','=','Involucrado')
            ->join('cat_submarca', 'cat_submarca.id', '=', 'vehiculo.idSubmarca')
            ->join('cat_marca', 'cat_marca.id', '=', 'cat_submarca.idMarca')
            ->join('cat_estado', 'cat_estado.id', '=', 'vehiculo.idEstado')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'vehiculo.idTipifDelito')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->join('acusacion', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('carpeta', 'carpeta.id', '=', 'acusacion.idCarpeta')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'carpeta.numCarpeta', 'unidad.nombre as unidad', 'vehiculo.placas', 'vehiculo.modelo', 'cat_marca.nombre as marca', 'vehiculo.numSerie','vehiculo.numMotor', 'tipif_delito.fecha')
            ->get();
    	return Datatables::of($data)->make(true);
    }
}
