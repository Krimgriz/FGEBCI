<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesonaDenunciadaController extends Controller
{
    public function index()
    {
        return view('busquedas.direccion');
    }

    public function anyData()
    {
    	$data = DB::table('variables_persona')
            ->join('persona', 'variables_persona.idPesona', '=', 'persona.id')
            ->join('extra_denunciado', 'extra_denunciado.idVariablesPersona', '=', 'variables_persona.id')
            ->join('acusacion', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('carpeta', 'acusacion.idCarpeta', '=', 'carpeta.id')
            ->join('tipif_delito', 'tipif_delito.idCarpeta', '=', 'carpeta.id')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'persona.nombre', 'persona.primerAp', 'persona.segundoAp', 'extra_denunciado.alias', 'carpeta.numCarpeta', 'cat_delito.nombre as delito', 'unidad.nombre as unidad')
            ->get();
    	return Datatables::of($data)->make(true);
    }
}
