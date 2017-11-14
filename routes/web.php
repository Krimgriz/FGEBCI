<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

/*Rutas provisionales*/
/*   |     |     |   */
/*   v     v     v   */
Route::get('/busqueda/persona', function () {
    return view('busquedas.persona');
});

Route::get('/busqueda/vehiculo', function () {
    return view('busquedas.vehiculo');
});

Route::get('/busqueda/numcarpeta', function () {
    return view('busquedas.numcarpeta');
});

Route::get('/busqueda/direccion', function () {
    return view('busquedas.direccion');
});

Route::get('/estadistica/municipio', function () {
    return view('estadisticas/municipio');
});

Route::get('/estadistica/iniciadas', function () {
    return view('estadisticas/iniciadas');
});

Route::get('/estadistica/delito', function () {
    return view('estadisticas/delito');
});

Route::get('/estadistica/edad', function () {
    return view('estadisticas/edad');
});

Route::get('/estadistica/etnia', function () {
    return view('estadisticas/etnia');
});

Route::get('/estadistica/fiscal', function () {
    return view('estadisticas/fiscal');
});

Route::get('/estadistica/region', function () {
    return view('estadisticas/region');
});

Route::get('/estadistica/sexo', function () {
    return view('estadisticas/sexo');
});


Route::get('/estadistica/unidad', function () {
    return view('estadisticas/unidad');
});

Route::get('/estadistica/colonia', function () {
    return view('estadisticas/colonia');
});

Route::get('/busqueda/detalle', function () {
    return view('reporte/detalle');
});


Route::get('/', function () {
    return view('index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
