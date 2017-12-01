<div>
	<div class="container" style="background: #767676; color: #ffffff;">
		{{ Form::label('etiqueta', ' ESTADO DE LA CARPETA: ', array('class' => '')) }}
	</div>
	<div class="row">
		<div class="col-sm-4">
			{{ Form::label('etiqueta', 'Estado de la Carpeta: ', array('class' => '')) }}
			<label for="">{{$DatosUnidad[0]->estadoCarpeta}}</label>
		</div>

		<div class="col-sm-4">
			{{ Form::label('etiqueta', 'Fecha de Determinación: ', array('class' => '')) }}
			@php
			if ($DatosUnidad[0]->fechaDeterminacion==null) {
				$DatosUnidad[0]->fechaDeterminacion="SIN DETERMINACION";
			}
			@endphp
			<label for="">{{$DatosUnidad[0]->fechaDeterminacion}}</label>
		</div>

		<div class="col-sm-4">
			{{ Form::label('etiqueta', 'Tipo de Determinación: ', array('class' => '')) }}
			<label for="">{{$DatosUnidad[0]->tipoDeterminacion}}</label>
		</div>
	</div>
</div>