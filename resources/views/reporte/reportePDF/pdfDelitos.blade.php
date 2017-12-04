<div class="container" style="background: #767676; color: #ffffff;">
	{{ Form::label('etiqueta', 'DELITOS ', array('class' => '')) }}
</div>
@php
$i=0;
@endphp
@while( $i<count($DatosDelitos))
	
	@php
	if ( $i!=0) {

		if ($DatosDelitos[$i-1]->nombre==$DatosDelitos[$i]->nombre && $DatosDelitos[$i-1]->fecha==$DatosDelitos[$i]->fecha && $DatosDelitos[$i-1]->hora==$DatosDelitos[$i]->hora && $DatosDelitos[$i-1]->tipoArma==$DatosDelitos[$i]->tipoArma && $DatosDelitos[$i-1]->arma==$DatosDelitos[$i]->arma) {
			$i=$i+1;

		}else{
			@endphp


			<div class="container" style="background: #a5a5a5;">
				<label for="">Delito: {{$DatosDelitos[$i]->nombre}}</label>
			</div>
			<div class="row">
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Tipo de Delito: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->tipoDelito}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Forma de Comisión: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->formaComision}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Modalidad: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->modalidad}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Consumación: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->consumacion}}</label>
				</div>
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Medio Utilizado para Cometer el Delito: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->tipoArma}}({{$DatosDelitos[$i]->arma}})</label>
				</div>

				<!--direccion donde ocurrieron los hechos-->
				<div class="col-sm-12" align="center">
					{{ Form::label('etiqueta', 'COMISION DEL ILICITO ', array('class' => '')) }}
				</div>

				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Fecha en que Ocurrieron los hechos: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->fecha}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Hora: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->hora}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Zona de ubicación: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->zona}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Lugar donde ocurrieron los hechos: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->lugar}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Municipio: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->municipio}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Localidad: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->localidad}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Colonia: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->colonia}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Numero Externo: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->numExterno}}</label>
				</div>
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Calle: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->calle}}</label>
				</div>
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Entre Calle: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->entreCalle}}</label>
				</div>
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Y Calle: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->yCalle}}</label>
				</div>
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Calle Trasera: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->calleTrasera}}</label>
				</div>

			</div>
			<hr style="margin: 0;background: #000000; height: 1px;">
			@php
			$i++;
			}
		
	}else{

		@endphp
			<div class="container" style="background: #a5a5a5;">
				<label for="">Delito: {{$DatosDelitos[$i]->nombre}}</label>
			</div>
			<div class="row">
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Tipo de Delito: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->tipoDelito}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Forma de Comisión: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->formaComision}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Modalidad: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->modalidad}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Consumación: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->consumacion}}</label>
				</div>
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Medio Utilizado para Cometer el Delito: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->tipoArma}}({{$DatosDelitos[$i]->arma}})</label>
				</div>

				<!--direccion donde ocurrieron los hechos-->
				<div class="col-sm-12" align="center">
					{{ Form::label('etiqueta', 'COMISION DEL ILICITO ', array('class' => '')) }}
				</div>

				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Fecha en que Ocurrieron los hechos: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->fecha}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Hora: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->hora}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Zona de ubicación: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->zona}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Lugar donde ocurrieron los hechos: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->lugar}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Municipio: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->municipio}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Localidad: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->localidad}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Colonia: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->colonia}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Numero Externo: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->numExterno}}</label>
				</div>
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Calle: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->calle}}</label>
				</div>
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Entre Calle: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->entreCalle}}</label>
				</div>
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Y Calle: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->yCalle}}</label>
				</div>
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Calle Trasera: ', array('class' => '')) }}
					<label for="">{{$DatosDelitos[$i]->calleTrasera}}</label>
				</div>

			</div>
			<hr style="margin: 0;background: #000000; height: 1px;">
		@php
		$i++;
	}
	@endphp
@endwhile