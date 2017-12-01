<div>
	<div class="container" style="background: #a5a5a5;">
		{{ Form::label('etiqueta', ' IMPUTADOS: ', array('class' => '')) }}
	</div>
	@php
	$i=0;
	@endphp
	@while( $i<count($DatosImputado))
	
	@php
	if ( $i!=0) {

		if ($DatosImputado[$i-1]->nombres==$DatosImputado[$i]->nombres && $DatosImputado[$i-1]->primerAp==$DatosImputado[$i]->primerAp && $DatosImputado[$i-1]->segundoAp==$DatosImputado[$i]->segundoAp && $DatosImputado[$i-1]->edad==$DatosImputado[$i]->edad && $DatosImputado[$i-1]->nacionalidad==$DatosImputado[$i]->nacionalidad) {
			$i=$i+1;

		}else{
			@endphp

			<div class="row">
				<div class="col-sm-12">
					{{ Form::label('etiqueta', 'Nombre: ', array('class' => '')) }}
					<label for="">{{$DatosImputado[$i]->nombres}}</label>
					<label for="">{{$DatosImputado[$i]->primerAp}}</label>
					<label for="">{{$DatosImputado[$i]->segundoAp}}</label>
				</div>

				<div class="col-sm-2">
					{{ Form::label('etiqueta', 'Edad: ', array('class' => '')) }}
					<label for="">{{$DatosImputado[$i]->edad}}</label>
				</div>
				<div class="col-sm-2">
					{{ Form::label('etiqueta', 'Sexo: ', array('class' => '')) }}
					<label for="">{{$DatosImputado[$i]->sexo}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Nacionalidad: ', array('class' => '')) }}
					<label for="">{{$DatosImputado[$i]->nacionalidad}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Entidad Federativa de Origen: ', array('class' => '')) }}
					<label for="">{{$DatosImputado[$i]->estadoOrigen}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Ocupación: ', array('class' => '')) }}
					<label for="">{{$DatosImputado[$i]->ocupacion}}</label>
				</div>
				<div class="col-sm-6">
					{{ Form::label('etiqueta', 'Lugar de trabajo: ', array('class' => '')) }}
					<label for="">{{$DatosImputado[$i]->lugarTrabajo}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Grado de Estudio: ', array('class' => '')) }}
					<label for="">{{$DatosImputado[$i]->escolaridad}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Estado civil: ', array('class' => '')) }}
					<label for="">{{$DatosImputado[$i]->estadoCivil}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Religión que profesa: ', array('class' => '')) }}
					<label for="">{{$DatosImputado[$i]->religion}}</label>
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
				<label for="">{{$DatosImputado[$i]->nombres}}</label>
				<label for="">{{$DatosImputado[$i]->primerAp}}</label>
				<label for="">{{$DatosImputado[$i]->segundoAp}}</label>
			</div>

			<div class="col-sm-2">
				{{ Form::label('etiqueta', 'Edad: ', array('class' => '')) }}
				<label for="">{{$DatosImputado[$i]->edad}}</label>
			</div>
			<div class="col-sm-2">
				{{ Form::label('etiqueta', 'Sexo: ', array('class' => '')) }}
				<label for="">{{$DatosImputado[$i]->sexo}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Nacionalidad: ', array('class' => '')) }}
				<label for="">{{$DatosImputado[$i]->nacionalidad}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Entidad Federativa de Origen: ', array('class' => '')) }}
				<label for="">{{$DatosImputado[$i]->estadoOrigen}}</label>
			</div>
			<div class="col-sm-6">
				{{ Form::label('etiqueta', 'Ocupación: ', array('class' => '')) }}
				<label for="">{{$DatosImputado[$i]->ocupacion}}</label>
			</div>
			<div class="col-sm-6">
				{{ Form::label('etiqueta', 'Lugar de trabajo: ', array('class' => '')) }}
				<label for="">{{$DatosImputado[$i]->lugarTrabajo}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Grado de Estudio: ', array('class' => '')) }}
				<label for="">{{$DatosImputado[$i]->escolaridad}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Estado civil: ', array('class' => '')) }}
				<label for="">{{$DatosImputado[$i]->estadoCivil}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Religión que profesa: ', array('class' => '')) }}
				<label for="">{{$DatosImputado[$i]->religion}}</label>
			</div>	
		</div>
		<hr style="margin: 0;background: #000000; height: 1px;">

		@php
		$i++;
	}
	@endphp
	@endwhile

</div>