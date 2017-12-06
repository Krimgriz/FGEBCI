<div>
	<div  style="background: #a5a5a5;">
		<label for="" style="margin-left: 10px;">DENUNCIANTES: </label>
	</div>
	@php
	$i=0;
	@endphp
	@while( $i<count($DatosAgrabiado))
	
		@if ($DatosAgrabiado[$i]->esEmpresa==0)

			@php
			if ( $i!=0) {

				if ($DatosAgrabiado[$i-1]->nombres==$DatosAgrabiado[$i]->nombres && $DatosAgrabiado[$i-1]->primerAp==$DatosAgrabiado[$i]->primerAp && $DatosAgrabiado[$i-1]->segundoAp==$DatosAgrabiado[$i]->segundoAp && $DatosAgrabiado[$i-1]->edad==$DatosAgrabiado[$i]->edad && $DatosAgrabiado[$i-1]->nacionalidad==$DatosAgrabiado[$i]->nacionalidad) {
					$i=$i+1;

				}else{
					@endphp

						<div class="col-12">
							<label for="">Nombre: {{$DatosAgrabiado[$i]->nombres}} {{$DatosAgrabiado[$i]->primerAp}} {{$DatosAgrabiado[$i]->segundoAp}}</label>
						</div>

						<div class="col-12">
							<label for="">Edad: {{$DatosAgrabiado[$i]->edad}}</label>
						
							<label for="" style="position: absolute;left: 75px">Sexo: {{$DatosAgrabiado[$i]->sexo}}</label>
						
							<label for="" style="position: absolute;left: 220px">Nacionalidad: {{$DatosAgrabiado[$i]->nacionalidad}}</label>
						
							<label for="" style="position: absolute;left: 420px">Entidad Federativa de Origen: {{$DatosAgrabiado[$i]->estadoOrigen}}</label>
						</div>
						<div class="col-12">
							<label for="">Ocupación: {{$DatosAgrabiado[$i]->ocupacion}}</label>
						
						</div>
						<div class="col-12">
							<label for="">RFC: {{$DatosAgrabiado[$i]->rfc}}</label>
							<label for="" style="position: absolute;left: 190px">Grado de Estudio: {{$DatosAgrabiado[$i]->escolaridad}}</label>
							<label for="" style="position: absolute;left: 500px">Estado civil: {{$DatosAgrabiado[$i]->estadoCivil}}</label>
						</div>
					<hr style="margin: 0;background: #000000; height: 1px;">

					@php
					$i++;
				}
				
			}else{

				@endphp
				
					<div class="col-12">
						<label for="">Nombre: {{$DatosAgrabiado[$i]->nombres}} {{$DatosAgrabiado[$i]->primerAp}} {{$DatosAgrabiado[$i]->segundoAp}}</label>
					</div>

					<div class="col-12">
						<label for="">Edad: {{$DatosAgrabiado[$i]->edad}}</label>
					
						<label for="" style="position: absolute;left: 75px">Sexo: {{$DatosAgrabiado[$i]->sexo}}</label>
					
						<label for="" style="position: absolute;left: 220px">Nacionalidad: {{$DatosAgrabiado[$i]->nacionalidad}}</label>
					
						<label for="" style="position: absolute;left: 420px">Entidad Federativa de Origen: {{$DatosAgrabiado[$i]->estadoOrigen}}</label>
					</div>
					<div class="col-12">
						<label for="">Ocupación: {{$DatosAgrabiado[$i]->ocupacion}}</label>
					
					</div>
					<div class="col-12">
						<label for="">RFC: {{$DatosAgrabiado[$i]->rfc}}</label>
						<label for="" style="position: absolute;left: 190px">Grado de Estudio: {{$DatosAgrabiado[$i]->escolaridad}}</label>
						<label for="" style="position: absolute;left: 500px">Estado civil: {{$DatosAgrabiado[$i]->estadoCivil}}</label>
					</div>
						
				<hr style="margin: 0;background: #000000; height: 1px;">

				@php
				$i++;
			}
			@endphp
		

		@elseif($DatosAgrabiado[$i]->esEmpresa==1)

			@php
			if ( $i!=0) {

				if ($DatosEmpresaAgrabiado[$i-1]->nombres==$DatosEmpresaAgrabiado[$i]->nombres && $DatosEmpresaAgrabiado[$i-1]->primerAp==$DatosEmpresaAgrabiado[$i]->primerAp && $DatosEmpresaAgrabiado[$i-1]->segundoAp==$DatosEmpresaAgrabiado[$i]->segundoAp && $DatosEmpresaAgrabiado[$i-1]->rfc==$DatosEmpresaAgrabiado[$i]->rfc && $DatosEmpresaAgrabiado[$i-1]->representanteLegal==$DatosEmpresaAgrabiado[$i]->representanteLegal) {
					$i=$i+1;

				}else{
					@endphp
					

						<div class="col-12">
							<label for="">Nombre: {{$DatosEmpresaAgrabiado[$i]->nombres}} {{$DatosEmpresaAgrabiado[$i]->primerAp}} {{$DatosEmpresaAgrabiado[$i]->segundoAp}}</label>
						
							<label for="" style="position: absolute;left: 363px;">Representante Legal: {{$DatosEmpresaAgrabiado[$i]->representanteLegal}}</label>
						</div>

						<div class="col-12">
							<label for="">RFC: {{$DatosEmpresaAgrabiado[$i]->rfc}}</label>
							<label for="" style="position: absolute;left: 220px">Telefono: {{$DatosEmpresaAgrabiado[$i]->telefono}}</label>
							<label for="" style="position: absolute;left: 500px">Numero Externo: {{$DatosEmpresaAgrabiado[$i]->numExterno}}</label>
						</div>	
						<div class="col-12">
							<label for="">Municipio: {{$DatosEmpresaAgrabiado[$i]->municipio}}</label>
							<label for="" style="position: absolute;left: 363px;">Localidad: {{$DatosEmpresaAgrabiado[$i]->localidad}}</label>
						</div>
						<div class="col-12">
							<label for="">Colonia: {{$DatosEmpresaAgrabiado[$i]->colonia}}</label>
							<label for="" style="position: absolute;left: 363px;"">Calle: {{$DatosEmpresaAgrabiado[$i]->calle}}</label>
						</div>
					<hr style="margin: 0;margin-top: 10px;background: #000000; height: 1px;">
						

					@php
					$i++;
				}
				
			}else{

				@endphp
				
					<div class="col-12">
						<label for="">Nombre: {{$DatosEmpresaAgrabiado[$i]->nombres}} {{$DatosEmpresaAgrabiado[$i]->primerAp}} {{$DatosEmpresaAgrabiado[$i]->segundoAp}}</label>
					
						<label for="" style="position: absolute;left: 363px;">Representante Legal: {{$DatosEmpresaAgrabiado[$i]->representanteLegal}}</label>
					</div>

					<div class="col-12">
						<label for="">RFC: {{$DatosEmpresaAgrabiado[$i]->rfc}}</label>
						<label for="" style="position: absolute;left: 220px">Telefono: {{$DatosEmpresaAgrabiado[$i]->telefono}}</label>
						<label for="" style="position: absolute;left: 500px">Numero Externo: {{$DatosEmpresaAgrabiado[$i]->numExterno}}</label>
					</div>	
					<div class="col-12">
						<label for="">Municipio: {{$DatosEmpresaAgrabiado[$i]->municipio}}</label>
						<label for="" style="position: absolute;left: 363px;">Localidad: {{$DatosEmpresaAgrabiado[$i]->localidad}}</label>
					</div>
					<div class="col-12">
						<label for="">Colonia: {{$DatosEmpresaAgrabiado[$i]->colonia}}</label>
						<label for="" style="position: absolute;left: 363px;"">Calle: {{$DatosEmpresaAgrabiado[$i]->calle}}</label>
					</div>
				<hr style="margin: 0;margin-top: 10px;background: #000000; height: 1px;">

				@php
				$i++;
			}
			@endphp
			



		@endif
	
	@endwhile
</div>