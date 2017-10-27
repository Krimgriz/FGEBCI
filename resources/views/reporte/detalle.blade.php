@extends('index')
@section('content')
	<br>
    <div class="fondo container" >
    	<br>
    	<div class="row">
	    	<div class="col-sm-1"></div>    
	        <div class="col-sm-2"><img src="{{ url('/img/FGE-icon.png') }}" class="img-fluid" alt=""></div>
	        <div class="col-sm-4">
	        	{{ Form::label('titulo', 'FORMATO DE INVESTIGACIONES MINISTERIALES', array('class' => '')) }}
	        </div>
	        <div class="col-sm-5" style="border: 1px solid black;"></div>
    		
    	</div>

    </div>
@endsection