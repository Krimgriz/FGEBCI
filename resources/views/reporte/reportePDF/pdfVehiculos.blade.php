
	@php
	$i=0;
	@endphp
	@while( $i<count($DatosVehiculos))
	
	@php
	if ( $i!=0) {

		if ($DatosVehiculos[$i-1]->numSerie==$DatosVehiculos[$i]->numSerie && $DatosVehiculos[$i-1]->numMotor==$DatosVehiculos[$i]->numMotor) {
			$i=$i+1;

		}else{
			@endphp

			<div class="row">
				<div class="col-sm-3">
					{{ Form::label('etiqueta', 'Estatus: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->status}}</label>
				</div>

				<div class="col-sm-3">
					{{ Form::label('etiqueta', 'Estado: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->estado}}</label>
				</div>
				<div class="col-sm-3">
					{{ Form::label('etiqueta', 'Procedencia: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->procedencia}}</label>
				</div>
				<div class="col-sm-3">
					{{ Form::label('etiqueta', 'Modelo: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->modelo}}</label>
				</div>
				<div class="col-sm-5">
					{{ Form::label('etiqueta', 'Aseguradora: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->aseguradora}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Marca: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->marca}}</label>
				</div>
				<div class="col-sm-3">
					{{ Form::label('etiqueta', 'SubMarca: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->submarca}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Clase del Vehiculo: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->claseVehiculo}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Tipo de Vehiculo: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->tipoVehiculo}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Tipo de Uso: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->tipoUso}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Numero de Registro Publico Vehicular: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->nrpv}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Numero de Serie: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->numSerie}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Numero de Motor: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->numMotor}}</label>
				</div>
				<div class="col-sm-4">
					{{ Form::label('etiqueta', 'Color: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->color}}</label>
				</div>
				<div class="col-sm-8">
					{{ Form::label('etiqueta', 'Señas Particulares: ', array('class' => '')) }}
					<label for="">{{$DatosVehiculos[$i]->senasPartic}}</label>
				</div>
			</div>
			<hr style="margin: 0;background: #000000; height: 1px;">

			@php
			$i++;
		}
		
	}else{

		@endphp
		<div class="container" style="background: #767676; color: #ffffff;">
			{{ Form::label('etiqueta', 'VEHICULOS', array('class' => '')) }}
		</div>

		<div class="row">
			<div class="col-sm-3">
				{{ Form::label('etiqueta', 'Estatus: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->status}}</label>
			</div>

			<div class="col-sm-3">
				{{ Form::label('etiqueta', 'Estado: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->estado}}</label>
			</div>
			<div class="col-sm-3">
				{{ Form::label('etiqueta', 'Procedencia: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->procedencia}}</label>
			</div>
			<div class="col-sm-3">
				{{ Form::label('etiqueta', 'Modelo: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->modelo}}</label>
			</div>
			<div class="col-sm-5">
				{{ Form::label('etiqueta', 'Aseguradora: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->aseguradora}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Marca: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->marca}}</label>
			</div>
			<div class="col-sm-3">
				{{ Form::label('etiqueta', 'SubMarca: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->submarca}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Clase del Vehiculo: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->claseVehiculo}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Tipo de Vehiculo: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->tipoVehiculo}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Tipo de Uso: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->tipoUso}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Numero de Registro Publico Vehicular: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->nrpv}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Numero de Serie: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->numSerie}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Numero de Motor: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->numMotor}}</label>
			</div>
			<div class="col-sm-4">
				{{ Form::label('etiqueta', 'Color: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->color}}</label>
			</div>
			<div class="col-sm-8">
				{{ Form::label('etiqueta', 'Señas Particulares: ', array('class' => '')) }}
				<label for="">{{$DatosVehiculos[$i]->senasPartic}}</label>
			</div>
		</div>
		<hr style="margin: 0;background: #000000; height: 1px;">

		@php
		$i++;
	}
	@endphp
	@endwhile