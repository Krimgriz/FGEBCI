<div  style="background: #767676; color: #ffffff;">
	<label style="margin-left: 10px;" for="">DELITOS</label>
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


			<div style="background: #a5a5a5;">
				<label for="" style="margin-left: 10px;">Delito: {{$DatosDelitos[$i]->nombre}}</label>
			</div>
				<div class="col-12">
					<label  for="">Tipo de Delito: {{$DatosDelitos[$i]->tipoDelito}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Forma de Comisión: {{$DatosDelitos[$i]->formaComision}}</label>
				</div>
				
				<div class="col-12">
					<label for="">Modalidad: {{$DatosDelitos[$i]->modalidad}}</label>
					<label style="position: absolute;left: 363px;" for="">Consumación: {{$DatosDelitos[$i]->consumacion}}</label>
					
				</div>
				</div>
				<div class="col-sm-12">
					<label for="">Medio Utilizado para Cometer el Delito: {{$DatosDelitos[$i]->tipoArma}}({{$DatosDelitos[$i]->arma}})</label>
				</div>

				<!--direccion donde ocurrieron los hechos-->

				<div class="col-12">
					<label for="">Fecha en que Ocurrieron los hechos: {{$DatosDelitos[$i]->fecha}}</label>
				
					<label for="" style="position: absolute;left: 363px;" >Hora: {{$DatosDelitos[$i]->hora}}</label>
				</div>
				<div class="col-12">
					<label for="">Zona de ubicación: {{$DatosDelitos[$i]->zona}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Calle: {{$DatosDelitos[$i]->calle}}</label>
				</div><br>
				<div class="col-12">
					<label for="">Lugar donde ocurrieron los hechos: {{$DatosDelitos[$i]->lugar}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Numero Externo: {{$DatosDelitos[$i]->numExterno}}</label>
				</div>
				<div class="col-12">
					<label for="">Municipio: {{$DatosDelitos[$i]->municipio}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Entre Calle: {{$DatosDelitos[$i]->entreCalle}}</label>
				</div>
				<br>
				<div class="col-12">
					<label for="">Localidad: {{$DatosDelitos[$i]->localidad}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Y Calle: {{$DatosDelitos[$i]->yCalle}}</label>
				</div>
				<br>
				<div class="col-12">
					<label for="">Colonia: {{$DatosDelitos[$i]->colonia}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Calle Trasera: {{$DatosDelitos[$i]->calleTrasera}}</label>
				</div>
				<br>

			
			<hr style="margin: 0;background: #000000; height: 1px;">
			@php
			$i++;
			}
		
	}else{

		@endphp
			<div style="background: #a5a5a5;">
				<label for="" style="margin-left: 10px;">Delito: {{$DatosDelitos[$i]->nombre}}</label>
			</div>
				<div class="col-12">
					<label  for="">Tipo de Delito: {{$DatosDelitos[$i]->tipoDelito}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Forma de Comisión: {{$DatosDelitos[$i]->formaComision}}</label>
				</div>
				
				<div class="col-12">
					<label for="">Modalidad: {{$DatosDelitos[$i]->modalidad}}</label>
					<label style="position: absolute;left: 363px;" for="">Consumación: {{$DatosDelitos[$i]->consumacion}}</label>
					
				</div>
				</div>
				<div class="col-sm-12">
					<label for="">Medio Utilizado para Cometer el Delito: {{$DatosDelitos[$i]->tipoArma}}({{$DatosDelitos[$i]->arma}})</label>
				</div>

				<!--direccion donde ocurrieron los hechos-->

				<div class="col-12">
					<label for="">Fecha en que Ocurrieron los hechos: {{$DatosDelitos[$i]->fecha}}</label>
				
					<label for="" style="position: absolute;left: 363px;" >Hora: {{$DatosDelitos[$i]->hora}}</label>
				</div>
				<div class="col-12">
					<label for="">Zona de ubicación: {{$DatosDelitos[$i]->zona}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Calle: {{$DatosDelitos[$i]->calle}}</label>
				</div><br>
				<div class="col-12">
					<label for="">Lugar donde ocurrieron los hechos: {{$DatosDelitos[$i]->lugar}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Numero Externo: {{$DatosDelitos[$i]->numExterno}}</label>
				</div>
				<div class="col-12">
					<label for="">Municipio: {{$DatosDelitos[$i]->municipio}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Entre Calle: {{$DatosDelitos[$i]->entreCalle}}</label>
				</div>
				<br>
				<div class="col-12">
					<label for="">Localidad: {{$DatosDelitos[$i]->localidad}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Y Calle: {{$DatosDelitos[$i]->yCalle}}</label>
				</div>
				<br>
				<div class="col-12">
					<label for="">Colonia: {{$DatosDelitos[$i]->colonia}}</label>
				
					<label style="position: absolute;left: 363px;" for="">Calle Trasera: {{$DatosDelitos[$i]->calleTrasera}}</label>
				</div>
				<br>

			<hr style="margin: 0;background: #000000; height: 1px;">
		@php
		$i++;
	}
	@endphp
@endwhile