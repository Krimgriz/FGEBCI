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

Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
});