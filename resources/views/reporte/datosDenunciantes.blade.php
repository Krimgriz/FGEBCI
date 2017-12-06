<div>
	<div class="container" style="background: #a5a5a5;">
		{{ Form::label('etiqueta', ' DENUNCIANTES: ', array('class' => '')) }}
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

					<div class="row">
						<div class="col-sm-12">
							{{ Form::label('etiqueta', 'Nombre: ', array('class' => '')) }}
							<label for="">{{$DatosAgrabiado[$i]->nombres}}</label>
							<label for="">{{$DatosAgrabiado[$i]->primerAp}}</label>
							<label for="">{{$DatosAgrabiado[$i]->segundoAp}}</label>
						</div>

						<div class="col-sm-1">
							{{ Form::label('etiqueta', 'Edad: ', array('class' => '')) }}
							<label for="">{{$DatosAgrabiado[$i]->edad}}</label>
						</div>
						<div class="col-sm-3">
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
							{{ Form::label('etiqueta', 'RFC: ', array('class' => '')) }}
							<label for="">{{$DatosAgrabiado[$i]->rfc}}</label>
						</div>
						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'Grado de Estudio: ', array('class' => '')) }}
							<label for="">{{$DatosAgrabiado[$i]->escolaridad}}</label>
						</div>
						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'Estado civil: ', array('class' => '')) }}
							<label for="">{{$DatosAgrabiado[$i]->estadoCivil}}</label>
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

					<div class="col-sm-1">
						{{ Form::label('etiqueta', 'Edad: ', array('class' => '')) }}
						<label for="">{{$DatosAgrabiado[$i]->edad}}</label>
					</div>
					<div class="col-sm-3">
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
						{{ Form::label('etiqueta', 'RFC: ', array('class' => '')) }}
						<label for="">{{$DatosAgrabiado[$i]->rfc}}</label>
					</div>
					<div class="col-sm-6">
						{{ Form::label('etiqueta', 'Grado de Estudio: ', array('class' => '')) }}
						<label for="">{{$DatosAgrabiado[$i]->escolaridad}}</label>
					</div>
					<div class="col-sm-6">
						{{ Form::label('etiqueta', 'Estado civil: ', array('class' => '')) }}
						<label for="">{{$DatosAgrabiado[$i]->estadoCivil}}</label>
					</div>
						
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
					

					<div class="row">
						<div class="col-sm-6">
							{{ Form::label('etiqueta', 'Nombre: ', array('class' => '')) }}
							<label for="">{{$DatosEmpresaAgrabiado[$i]->nombres}}</label>
							<label for="">{{$DatosEmpresaAgrabiado[$i]->primerAp}}</label>
							<label for="">{{$DatosEmpresaAgrabiado[$i]->segundoAp}}</label>
						</div>
						
						<div class="col-sm-6">
							{{ Form::label('etiqueta', 'Representante Legal: ', array('class' => '')) }}
							<label for="">{{$DatosEmpresaAgrabiado[$i]->representanteLegal}}</label>
						</div>

						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'RFC: ', array('class' => '')) }}
							<label for="">{{$DatosEmpresaAgrabiado[$i]->rfc}}</label>
						</div>
						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'Telefono: ', array('class' => '')) }}
							<label for="">{{$DatosEmpresaAgrabiado[$i]->telefono}}</label>
						</div>
						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'Numero Externo: ', array('class' => '')) }}
							<label for="">{{$DatosEmpresaAgrabiado[$i]->numExterno}}</label>
						</div>	
						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'Colonia: ', array('class' => '')) }}
							<label for="">{{$DatosEmpresaAgrabiado[$i]->colonia}}</label>
						</div>
						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'Municipio: ', array('class' => '')) }}
							<label for="">{{$DatosEmpresaAgrabiado[$i]->municipio}}</label>
						</div>
						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'Localidad: ', array('class' => '')) }}
							<label for="">{{$DatosEmpresaAgrabiado[$i]->localidad}}</label>
						</div>
						<div class="col-sm-12">
							{{ Form::label('etiqueta', 'Calle: ', array('class' => '')) }}
							<label for="">{{$DatosEmpresaAgrabiado[$i]->calle}}</label>
						</div>
						
					</div>
					<hr style="margin: 0;background: #000000; height: 1px;">

					@php
					$i++;
				}
				
			}else{

				@endphp
				
				<div class="row">
					<div class="col-sm-6">
						{{ Form::label('etiqueta', 'Nombre: ', array('class' => '')) }}
						<label for="">{{$DatosEmpresaAgrabiado[$i]->nombres}}</label>
						<label for="">{{$DatosEmpresaAgrabiado[$i]->primerAp}}</label>
						<label for="">{{$DatosEmpresaAgrabiado[$i]->segundoAp}}</label>
					</div>
					
					<div class="col-sm-6">
						{{ Form::label('etiqueta', 'Representante Legal: ', array('class' => '')) }}
						<label for="">{{$DatosEmpresaAgrabiado[$i]->representanteLegal}}</label>
					</div>

					<div class="col-sm-4">
						{{ Form::label('etiqueta', 'RFC: ', array('class' => '')) }}
						<label for="">{{$DatosEmpresaAgrabiado[$i]->rfc}}</label>
					</div>
					<div class="col-sm-4">
						{{ Form::label('etiqueta', 'Telefono: ', array('class' => '')) }}
						<label for="">{{$DatosEmpresaAgrabiado[$i]->telefono}}</label>
					</div>
					<div class="col-sm-4">
						{{ Form::label('etiqueta', 'Numero Externo: ', array('class' => '')) }}
						<label for="">{{$DatosEmpresaAgrabiado[$i]->numExterno}}</label>
					</div>	
					<div class="col-sm-4">
						{{ Form::label('etiqueta', 'Colonia: ', array('class' => '')) }}
						<label for="">{{$DatosEmpresaAgrabiado[$i]->colonia}}</label>
					</div>
					<div class="col-sm-4">
						{{ Form::label('etiqueta', 'Municipio: ', array('class' => '')) }}
						<label for="">{{$DatosEmpresaAgrabiado[$i]->municipio}}</label>
					</div>
					<div class="col-sm-4">
						{{ Form::label('etiqueta', 'Localidad: ', array('class' => '')) }}
						<label for="">{{$DatosEmpresaAgrabiado[$i]->localidad}}</label>
					</div>
					<div class="col-sm-12">
						{{ Form::label('etiqueta', 'Calle: ', array('class' => '')) }}
						<label for="">{{$DatosEmpresaAgrabiado[$i]->calle}}</label>
					</div>
				</div>
				<hr style="margin: 0;background: #000000; height: 1px;">

				@php
				$i++;
			}
			@endphp
			



		@endif
	
	@endwhile
</div>