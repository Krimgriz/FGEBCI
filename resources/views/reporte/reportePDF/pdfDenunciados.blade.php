<div>
	<div  style="background: #a5a5a5;">
		<label for="" style="margin-left: 10px;"> DENUNCIADOS: </label>
	</div>
	@php
	$i=0;
	@endphp
	@while( $i<count($DatosImputado))
	
		@if ($DatosImputado[$i]->esEmpresa==0)
		
			@php
			if ( $i!=0) {

				if ($DatosImputado[$i-1]->nombres==$DatosImputado[$i]->nombres && $DatosImputado[$i-1]->primerAp==$DatosImputado[$i]->primerAp && $DatosImputado[$i-1]->segundoAp==$DatosImputado[$i]->segundoAp && $DatosImputado[$i-1]->edad==$DatosImputado[$i]->edad && $DatosImputado[$i-1]->nacionalidad==$DatosImputado[$i]->nacionalidad) {
					$i=$i+1;

				}else{
					@endphp
					
						<div class="col-12">
							<label for="">Nombre: {{$DatosImputado[$i]->nombres}} {{$DatosImputado[$i]->primerAp}} {{$DatosImputado[$i]->segundoAp}}</label>
						</div>

						<div class="col-12">
							<label for="">Edad: {{$DatosImputado[$i]->edad}}</label>
						
							<label for="" style="position: absolute;left: 75px">Sexo: {{$DatosImputado[$i]->sexo}}</label>
						
							<label for="" style="position: absolute;left: 220px">Nacionalidad: {{$DatosImputado[$i]->nacionalidad}}</label>
						
							<label for="" style="position: absolute;left: 420px">Entidad Federativa de Origen: {{$DatosImputado[$i]->estadoOrigen}}</label>
						</div>
						<div class="col-12">
							<label for="">Ocupación: {{$DatosImputado[$i]->ocupacion}}</label>
						
						</div>
						<div class="col-12">
							<label for="">RFC: {{$DatosImputado[$i]->rfc}}</label>
							<label for="" style="position: absolute;left: 190px">Grado de Estudio: {{$DatosImputado[$i]->escolaridad}}</label>
							<label for="" style="position: absolute;left: 500px">Estado civil: {{$DatosImputado[$i]->estadoCivil}}</label>
						</div>
						
					
					<hr style="margin: 0;background: #000000; height: 1px;">

					@php
					$i++;
				}
				
			}else{

				@endphp
				
				
					<div class="col-12">
						<label for="">Nombre: {{$DatosImputado[$i]->nombres}} {{$DatosImputado[$i]->primerAp}} {{$DatosImputado[$i]->segundoAp}}</label>
					</div>

					<div class="col-12">
						<label for="">Edad: {{$DatosImputado[$i]->edad}}</label>
					
						<label for="" style="position: absolute;left: 75px">Sexo: {{$DatosImputado[$i]->sexo}}</label>
					
						<label for="" style="position: absolute;left: 220px">Nacionalidad: {{$DatosImputado[$i]->nacionalidad}}</label>
					
						<label for="" style="position: absolute;left: 420px">Entidad Federativa de Origen: {{$DatosImputado[$i]->estadoOrigen}}</label>
					</div>
					<div class="col-12">
						<label for="">Ocupación: {{$DatosImputado[$i]->ocupacion}}</label>
					
					</div>
					<div class="col-12">
						<label for="">RFC: {{$DatosImputado[$i]->rfc}}</label>
						<label for="" style="position: absolute;left: 190px">Grado de Estudio: {{$DatosImputado[$i]->escolaridad}}</label>
						<label for="" style="position: absolute;left: 500px">Estado civil: {{$DatosImputado[$i]->estadoCivil}}</label>
					</div>
				
				<hr style="margin: 0;background: #000000; height: 1px;">

				@php
				$i++;
			}
			@endphp


		@elseif($DatosImputado[$i]->esEmpresa==1)

			@php
			if ( $i!=0) {

				if ($DatosEmpresaImputado[$i-1]->nombres==$DatosEmpresaImputado[$i]->nombres && $DatosEmpresaImputado[$i-1]->primerAp==$DatosEmpresaImputado[$i]->primerAp && $DatosEmpresaImputado[$i-1]->segundoAp==$DatosEmpresaImputado[$i]->segundoAp && $DatosEmpresaImputado[$i-1]->rfc==$DatosEmpresaImputado[$i]->rfc && $DatosEmpresaImputado[$i-1]->representanteLegal==$DatosEmpresaImputado[$i]->representanteLegal) {
					$i=$i+1;

				}else{
					@endphp
					

					
						<div class="col-12">
							<label for="">Nombre: {{$DatosEmpresaImputado[$i]->nombres}} {{$DatosEmpresaImputado[$i]->primerAp}} {{$DatosEmpresaImputado[$i]->segundoAp}}</label>
						
							<label for="" style="position: absolute;left: 363px;">Representante Legal: {{$DatosEmpresaImputado[$i]->representanteLegal}}</label>
						</div>

						<div class="col-12">
							<label for="">RFC: {{$DatosEmpresaImputado[$i]->rfc}}</label>
							<label for="" style="position: absolute;left: 220px">Telefono: {{$DatosEmpresaImputado[$i]->telefono}}</label>
							<label for="" style="position: absolute;left: 500px">Numero Externo: {{$DatosEmpresaImputado[$i]->numExterno}}</label>
						</div>	
						<div class="col-12">
							<label for="">Municipio: {{$DatosEmpresaImputado[$i]->municipio}}</label>
							<label for="" style="position: absolute;left: 363px;">Localidad: {{$DatosEmpresaImputado[$i]->localidad}}</label>
						</div>
						<div class="col-12">
							<label for="">Colonia: {{$DatosEmpresaImputado[$i]->colonia}}</label>
							<label for="" style="position: absolute;left: 363px;"">Calle: {{$DatosEmpresaImputado[$i]->calle}}</label>
						</div>
					<hr style="margin: 0;margin-top: 10px;background: #000000; height: 1px;">
						
					@php
					$i++;
				}
				
			}else{

				@endphp
				
					<div class="col-12">
						<label for="">Nombre: {{$DatosEmpresaImputado[$i]->nombres}} {{$DatosEmpresaImputado[$i]->primerAp}} {{$DatosEmpresaImputado[$i]->segundoAp}}</label>
					
						<label for="" style="position: absolute;left: 363px;">Representante Legal: {{$DatosEmpresaImputado[$i]->representanteLegal}}</label>
					</div>

					<div class="col-12">
						<label for="">RFC: {{$DatosEmpresaImputado[$i]->rfc}}</label>
						<label for="" style="position: absolute;left: 220px">Telefono: {{$DatosEmpresaImputado[$i]->telefono}}</label>
						<label for="" style="position: absolute;left: 500px">Numero Externo: {{$DatosEmpresaImputado[$i]->numExterno}}</label>
					</div>	
					<div class="col-12">
						<label for="">Municipio: {{$DatosEmpresaImputado[$i]->municipio}}</label>
						<label for="" style="position: absolute;left: 363px;">Localidad: {{$DatosEmpresaImputado[$i]->localidad}}</label>
					</div>
					<div class="col-12">
						<label for="">Colonia: {{$DatosEmpresaImputado[$i]->colonia}}</label>
						<label for="" style="position: absolute;left: 363px;"">Calle: {{$DatosEmpresaImputado[$i]->calle}}</label>
					</div>
				<hr style="margin: 0;margin-top: 10px;background: #000000; height: 1px;">
					

				@php
				$i++;
			}
			@endphp
			



		@endif
	@endwhile

</div>