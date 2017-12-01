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
        
    }

   public function anyData()
    {

        



        $data = DB::table('domicilio') 
            ->join('cat_municipio', 'domicilio.idMunicipio', '=', 'cat_municipio.id') 
            ->join('cat_localidad', 'domicilio.idLocalidad', '=', 'cat_localidad.id') 
            ->join('cat_colonia', 'domicilio.idColonia', '=', 'cat_colonia.id') 
            ->join('cat_estado', 'cat_municipio.idEstado', '=', 'cat_estado.id') 
            ->join('tipif_delito', 'domicilio.id', '=', 'tipif_delito.idDomicilio') 
            ->join('cat_delito', 'tipif_delito.idDelito', '=', 'cat_delito.id') 
            ->join('acusacion', 'tipif_delito.id', '=', 'acusacion.idTipifDelito') 
            ->join('carpeta', 'acusacion.idCarpeta', '=', 'carpeta.id') 
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad') 
            ->select('carpeta.id', 'cat_municipio.nombre as municipio', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal', 'domicilio.calle', 'carpeta.numCarpeta', 'cat_delito.nombre as delito', 'unidad.nombre as unidad') 
            ->get(); 

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



    
}
