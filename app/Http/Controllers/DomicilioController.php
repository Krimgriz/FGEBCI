<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use App\Models\Domicilio;
use DB;

class DomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('busquedas.direccion');
        /*
        
        
        $direcciones = Domicilio::all();
        return view('busquedas.direccion', compact('direcciones'));
        */
    }

   public function anyData()
    {

        /*pruebas de consultas
        domicilio
        
        $data = DB::table('domicilio')
            ->join('cat_estado', 'domicilio.idEstado', '=', 'cat_estado.id')
            ->join('cat_municipio', 'domicilio.idMunicipio', '=', 'cat_municipio.id')
            ->join('cat_localidad', 'domicilio.idLocalidad', '=', 'cat_localidad.id')
            ->join('cat_colonia', 'domicilio.idColonia', '=', 'cat_colonia.id')
            ->join('tipif_delito', 'domicilio.id', '=', 'tipif_delito.idDomicilio')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->join('carpeta', 'tipif_delito.idCarpeta', '=', 'carpeta.id')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'cat_municipio.nombre as municipio', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal', 'domicilio.calle', 'carpeta.numCarpeta', 'cat_delito.nombre as delito', 'unidad.nombre as unidad')
            ->get();
        
        consulta de denunciado
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

        consulta de denunciantes
        $data = DB::table('variables_persona')
            ->join('persona', 'variables_persona.idPesona', '=', 'persona.id')
            ->join('extra_denunciado', 'extra_denunciante.idVariablesPersona', '=', 'variables_persona.id')
            ->join('acusacion', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('carpeta', 'acusacion.idCarpeta', '=', 'carpeta.id')
            ->join('tipif_delito', 'tipif_delito.idCarpeta', '=', 'carpeta.id')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'persona.nombre', 'persona.primerAp', 'persona.segundoAp', 'carpeta.numCarpeta', 'cat_delito.nombre as delito', 'unidad.distrito', 'unidad.nombre as unidad')
            ->get();
       

        imvolucrados
        $data = DB::table('variables_persona')
            ->join('persona', 'variables_persona.idPesona', '=', 'persona.id')
            ->join('extra_denunciado', 'extra_denunciante.idVariablesPersona', '=', 'variables_persona.id')
            ->join('acusacion', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('acusacion', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('carpeta', 'acusacion.idCarpeta', '=', 'carpeta.id')
            ->join('tipif_delito', 'tipif_delito.idCarpeta', '=', 'carpeta.id')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'persona.nombre', 'persona.primerAp', 'persona.segundoAp', 'carpeta.numCarpeta', 'cat_delito.nombre as delito', 'unidad.distrito', 'unidad.nombre as unidad')
            ->get();

        vehiculos en general
        $data = DB::table('vehiculo')
            ->join('cat_marca', 'cat_marca.id', '=', 'vehiculo.idMarca')
            ->join('cat_submarca', 'cat_submarca.id', '=', 'vehiculo.idSubmarca')
            ->join('cat_estado', 'cat_estado.id', '=', 'vehiculo.idEstado')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'vehiculo.idTipifDelito')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->join('carpeta', 'carpeta.id', '=', 'tipif_delito.idCarpeta')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'carpeta.numCarpeta', 'unidad.nombre as unidad', 'vehiculo.placas', 'vehiculo.modelo', 'cat_marca.nombre as marca', 'vehiculo.numSerie', 'vehiculo.numMotor', 'cat_estado.nombre as estado')
            ->get();

        vehiculos involucrados
        $data = DB::table('vehiculo')
            ->join('cat_marca', 'cat_marca.id', '=', 'vehiculo.idMarca')
            ->join('cat_submarca', 'cat_submarca.id', '=', 'vehiculo.idSubmarca')
            ->join('cat_estado', 'cat_estado.id', '=', 'vehiculo.idEstado')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'vehiculo.idTipifDelito')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->join('carpeta', 'carpeta.id', '=', 'tipif_delito.idCarpeta')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'carpeta.numCarpeta', 'unidad.nombre as unidad', 'vehiculo.placas', 'vehiculo.modelo', 'cat_marca.nombre as marca', 'vehiculo.numSerie', 'vehiculo.numMotor')
            ->where('vehiculo.status','=','Involucrado')
            ->get();

        vehiculos robados
        $data = DB::table('vehiculo')
            ->join('cat_marca', 'cat_marca.id', '=', 'vehiculo.idMarca')
            ->join('cat_submarca', 'cat_submarca.id', '=', 'vehiculo.idSubmarca')
            ->join('cat_estado', 'cat_estado.id', '=', 'vehiculo.idEstado')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'vehiculo.idTipifDelito')
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id')
            ->join('carpeta', 'carpeta.id', '=', 'tipif_delito.idCarpeta')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id', 'carpeta.numCarpeta', 'unidad.nombre as unidad', 'vehiculo.placas', 'vehiculo.modelo', 'cat_marca.nombre as marca', 'vehiculo.numSerie', 'vehiculo.numMotor', 'tipif_delito.fecha')
            ->where('vehiculo.status','=','Robado')
            ->get();

        */



        $data = DB::table('domicilio') ->join('cat_estado', 'domicilio.idEstado', '=', 'cat_estado.id') ->join('cat_municipio', 'domicilio.idMunicipio', '=', 'cat_municipio.id') ->join('cat_localidad', 'domicilio.idLocalidad', '=', 'cat_localidad.id') ->join('cat_colonia', 'domicilio.idColonia', '=', 'cat_colonia.id') ->join('tipif_delito', 'domicilio.id', '=', 'tipif_delito.idDomicilio') ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id') ->join('carpeta', 'tipif_delito.idCarpeta', '=', 'carpeta.id') ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad') ->select('carpeta.id', 'cat_municipio.nombre as municipio', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal', 'domicilio.calle', 'carpeta.numCarpeta', 'cat_delito.nombre as delito', 'unidad.nombre as unidad') ->get(); 
        return Datatables::of($data)->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function data_domicilio(){
           return Datatables::of( Domicilio::where()->get()   )->make(true);
     }

    
}
