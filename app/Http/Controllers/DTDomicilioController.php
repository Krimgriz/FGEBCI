<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DTDomicilioController extends Controller
{
    public function index(){
    	return view('busquedas.direccion');
    }
}
