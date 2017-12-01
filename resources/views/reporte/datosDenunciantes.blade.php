<div>
	<div class="container" style="background: #a5a5a5;">
		{{ Form::label('etiqueta', ' AGRAVIADOS: ', array('class' => '')) }}
	</div>
	@php
	$i=0;
	@endphp
	@while( $i<count($DatosAgrabiado))
	
	@php
	if ( $i!=0) {

		if ($DatosAgrabiado[$i-1]->nombres==$DatosAgrabiado[$i]->nombres && $DatosAgrabiado[$i-1]->primerAp==$DatosAgrabiado[$i]->primerAp && $DatosAgrabiado[$i-1]->segundoAp==$DatosAgrabiado[$i]->segundoAp && $DatosAgrabiado[$i-1]->edad==$DatosAgrabiado[$i]->edad && $DatosAgrabiado[$i-1]->nacionalidad==$DatosAgrabiado[$i]->nacionalidad) {
			$i=$i+1;

		}else{
			@endphp

			<div class="row">
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Nombre: ', array('class' => '')) }}
					<label for="">{{$DatosAgrabiado[$i]->nombres}}</label>
					<label for="">{{$DatosAgrabiado[$i]->primerAp}}</label>
					<label for="">{{$DatosAgrabiado[$i]->segundoAp}}</label>
				</div>

				<div class="col-sm-2">
					{{ Form::label('etiqueta', 'Edad: ', array('class' => '')) }}
					<label for="">{{$DatosAgrabiado[$i]->edad}}</label>
				</div>
				<div class="col-sm-2">
					{{ Form::label('etiqueta', 'Sexo: ', array('class' => '')) }}
					<label for="">{{$DatosAgrabiado[$i]->sexo}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Nacionalidad: ', array('class' => '')) }}
					<label for="">{{$DatosAgrabiado[$i]->nacionalidad}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Entidad Federativa de Origen: ', array('class' => '')) }}
					<label for="">{{$DatosAgrabiado[$i]->estadoOrigen}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Ocupación: ', array('class' => '')) }}
					<label for="">{{$DatosAgrabiado[$i]->ocupacion}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Lugar de trabajo: ', array('class' => '')) }}
					<label for="">{{$DatosAgrabiado[$i]->lugarTrabajo}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Grado de Estudio: ', array('class' => '')) }}
					<label for="">{{$DatosAgrabiado[$i]->escolaridad}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Estado civil: ', array('class' => '')) }}
					<label for="">{{$DatosAgrabiado[$i]->estadoCivil}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Religión que profesa: ', array('class' => '')) }}
					<label for="">{{$DatosAgrabiado[$i]->religion}}</label>
				</div>	
			</div>
			<hr style="margin: 0;background: #000000; height: 1px;">

			@php
			$i++;
		}
		
	}else{

		@endphp
		
		<div class="row">
			<div class="col-sm-12">
				{{ Form::label('etiqueta', 'Nombre: ', array('class' => '')) }}
				<label for="">{{$DatosAgrabiado[$i]->nombres}}</label>
				<label for="">{{$DatosAgrabiado[$i]->primerAp}}</label>
				<label for="">{{$DatosAgrabiado[$i]->segundoAp}}</label>
			</div>

			<div class="col-sm-2">
				{{ Form::label('etiqueta', 'Edad: ', array('class' => '')) }}
				<label for="">{{$DatosAgrabiado[$i]->edad}}</label>
			</div>
			<div class="col-sm-2">
				{{ Form::label('etiqueta', 'Sexo: ', array('class' => '')) }}
				<label for="">{{$DatosAgrabiado[$i]->sexo}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Nacionalidad: ', array('class' => '')) }}
				<label for="">{{$DatosAgrabiado[$i]->nacionalidad}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Entidad Federativa de Origen: ', array('class' => '')) }}
				<label for="">{{$DatosAgrabiado[$i]->estadoOrigen}}</label>
			</div>
			<div class="col-sm-6">
				{{ Form::label('etiqueta', 'Ocupación: ', array('class' => '')) }}
				<label for="">{{$DatosAgrabiado[$i]->ocupacion}}</label>
			</div>
			<div class="col-sm-6">
				{{ Form::label('etiqueta', 'Lugar de trabajo: ', array('class' => '')) }}
				<label for="">{{$DatosAgrabiado[$i]->lugarTrabajo}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Grado de Estudio: ', array('class' => '')) }}
				<label for="">{{$DatosAgrabiado[$i]->escolaridad}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Estado civil: ', array('class' => '')) }}
				<label for="">{{$DatosAgrabiado[$i]->estadoCivil}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Religión que profesa: ', array('class' => '')) }}
				<label for="">{{$DatosAgrabiado[$i]->religion}}</label>
			</div>	
		</div>
		<hr style="margin: 0;background: #000000; height: 1px;">

		@php
		$i++;
	}
	@endphp

	
	@endwhile
</div>