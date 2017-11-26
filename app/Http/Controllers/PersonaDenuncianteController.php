<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use DB;

class PersonaDenuncianteController extends Controller
{
    public function index()
    {
        return view('busquedas.personaDenunciante');
    }

    public function anyData()
    {
    	$data = DB::table('carpeta')
            ->join('acusacion', 'carpeta.id', '=', 'acusacion.idCarpeta')
            ->join('extra_denunciante', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->select('carpeta.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'carpeta.numCarpeta', 'unidad.region', 'unidad.nombre as unidad')
            ->get();
    	return Datatables::of($data)->make(true);
    }
}
