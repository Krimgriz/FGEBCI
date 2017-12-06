
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

				<div class="col-12">
				
					<label for="">Estatus: {{$DatosVehiculos[$i]->status}}</label>
				
					<label for="" style="position: absolute;left: 190px">Estado: {{$DatosVehiculos[$i]->estado}}</label>
					
					<label for="" style="position: absolute;left: 400px">Procedencia: {{$DatosVehiculos[$i]->procedencia}}</label>
					
					<label for="" style="position: absolute;left: 600px">Modelo: {{$DatosVehiculos[$i]->modelo}}</label>
				</div>
				<div class="col-12">
					
					<label for="">Aseguradora: {{$DatosVehiculos[$i]->aseguradora}}</label>
					
					<label for="" style="position: absolute;left: 300px">Marca: {{$DatosVehiculos[$i]->marca}}</label>
					
					<label for="" style="position: absolute;left: 450px">SubMarca: {{$DatosVehiculos[$i]->submarca}}</label>
				</div>
				<div class="col-12">
					
					<label for="">Clase del Vehiculo: {{$DatosVehiculos[$i]->claseVehiculo}}</label>
					
					<label for="" style="position: absolute;left: 230px">Tipo de Vehiculo: {{$DatosVehiculos[$i]->tipoVehiculo}}</label>
					
					<label for="" style="position: absolute;left: 400px">Tipo de Uso: {{$DatosVehiculos[$i]->tipoUso}}</label>
				</div>
				<div class="col-12">
					
					<label for="">Numero de Registro Publico Vehicular: {{$DatosVehiculos[$i]->nrpv}}</label>
					
					<label for="" style="position: absolute;left: 363px">Numero de Serie: {{$DatosVehiculos[$i]->numSerie}}</label>
				</div>
				<div class="col-12">
					
					<label for="">Numero de Motor: {{$DatosVehiculos[$i]->numMotor}}</label>
					
					<label for="" style="position: absolute;left: 363px">Color: {{$DatosVehiculos[$i]->color}}</label>
				</div>
				<div class="col-12">
					
					<label for="">Señas Particulares: {{$DatosVehiculos[$i]->senasPartic}}</label>
				</div>
			<hr style="margin: 0;background: #000000; height: 1px;">

			@php
			$i++;
		}
		
	}else{

		@endphp
		<div style="background: #767676; color: #ffffff;">
			<label for="" style="margin-left: 10px;">VEHICULOS</label>
		</div>

			<div class="col-12">
				
				<label for="">Estatus: {{$DatosVehiculos[$i]->status}}</label>
			
				<label for="" style="position: absolute;left: 190px">Estado: {{$DatosVehiculos[$i]->estado}}</label>
				
				<label for="" style="position: absolute;left: 400px">Procedencia: {{$DatosVehiculos[$i]->procedencia}}</label>
				
				<label for="" style="position: absolute;left: 600px">Modelo: {{$DatosVehiculos[$i]->modelo}}</label>
			</div>
			<div class="col-12">
				
				<label for="">Aseguradora: {{$DatosVehiculos[$i]->aseguradora}}</label>
				
				<label for="" style="position: absolute;left: 300px">Marca: {{$DatosVehiculos[$i]->marca}}</label>
				
				<label for="" style="position: absolute;left: 450px">SubMarca: {{$DatosVehiculos[$i]->submarca}}</label>
			</div>
			<div class="col-12">
				
				<label for="">Clase del Vehiculo: {{$DatosVehiculos[$i]->claseVehiculo}}</label>
				
				<label for="" style="position: absolute;left: 230px">Tipo de Vehiculo: {{$DatosVehiculos[$i]->tipoVehiculo}}</label>
				
				<label for="" style="position: absolute;left: 400px">Tipo de Uso: {{$DatosVehiculos[$i]->tipoUso}}</label>
			</div>
			<div class="col-12">
				
				<label for="">Numero de Registro Publico Vehicular: {{$DatosVehiculos[$i]->nrpv}}</label>
				
				<label for="" style="position: absolute;left: 363px">Numero de Serie: {{$DatosVehiculos[$i]->numSerie}}</label>
			</div>
			<div class="col-12">
				
				<label for="">Numero de Motor: {{$DatosVehiculos[$i]->numMotor}}</label>
				
				<label for="" style="position: absolute;left: 363px">Color: {{$DatosVehiculos[$i]->color}}</label>
			</div>
			<div class="col-12">
				
				<label for="">Señas Particulares: {{$DatosVehiculos[$i]->senasPartic}}</label>
			</div>
		<hr style="margin: 0;background: #000000; height: 1px;">

		@php
		$i++;
	}
	@endphp
	@endwhile