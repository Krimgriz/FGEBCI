@extends('index')
@section('content')
<br>

{{--dd($DatosUnidad[0]->nombre)--}}

<div class="fondo">
	<div class="container" style="border:1px solid black;" >
		<br>
		<div class="row">    
			<div class="col-sm-2"><img src="{{ url('/img/FGE-icon.png') }}" class="img-fluid" alt=""></div>
			<div class="col-sm-5" align="center">
				{{ Form::label('etiqueta', 'FORMATO DE CARPETAS DE INVESTIGACIÓN', array('class' => '')) }}
				<br>
				{{ Form::label('etiqueta', 'Información Básica', array('class' => '')) }}
				<br>
				{{ Form::label('etiqueta', 'CENTRO DE INFORMACIÓN', array('class' => '')) }}
			</div>
			{{-- DATOS GENERALES DE LA CARPETA --}}
			@include('reporte.datosUnidad')	    		
		</div>
		<br>
		
		{{-- DATOS DEL FISCAL --}}
		@include('reporte.datosFiscal')

		{{-- DATOS DEL DELITO Y LA TIPIFICAION DEL DELITO --}}

		@include('reporte.datosDelitos')	



		{{-- DATOS DE PERSONAS INVOLUCRADAS  --}}
		<div>
			<div class="container" style="background: #767676; color: #ffffff;">
				{{ Form::label('etiqueta', 'PERSONAS INVOLUCRADAS: ', array('class' => '')) }}
			</div>

			@include('reporte.datosDenunciantes')

			@include('reporte.datosDenunciados')

		</div>

		@include('reporte.datosAcusaciones')

		@include('reporte.datosVehiculos')

		@include('reporte.datosCarpeta')


		@include('reporte.descripcionHechos')



		
	</div>
</div>
@endsection