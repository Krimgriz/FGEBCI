<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use DB;

class PersonaDenunciadaController extends Controller
{
    public function index()
    {
        return view('busquedas.personaDenunciada');
    }

    public function anyData()
    {
    	$data = DB::table('carpeta')
            ->join('acusacion', 'carpeta.id', '=', 'acusacion.idCarpeta')
            ->join('extra_denunciado', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->select('carpeta.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'extra_denunciado.alias', 'carpeta.numCarpeta', 'cat_delito.nombre as delito', 'unidad.nombre as unidad')
            ->get();
    	return Datatables::of($data)->make(true);
    }
}
