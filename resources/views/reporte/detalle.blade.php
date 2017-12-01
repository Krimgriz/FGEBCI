@extends('index')
@section('content')
	<br>

{{--dd($DatosUnidad[0]->nombre)--}}

	<div class="fondo">
	    <div class="container" style="border:1px solid black;" >
	    	<br>
	    	<div class="row">    
		        <div class="col-sm-2"><img src="{{ url('/img/FGE-icon.png') }}" class="img-fluid" alt=""></div>
		        <div class="col-sm-5" align="center">
		        	{{ Form::label('etiqueta', 'FORMATO DE CARPETAS DE INVESTIGACIÓN', array('class' => '')) }}
		        	<br>
		        	{{ Form::label('etiqueta', 'Información Básica', array('class' => '')) }}
		        	<br>
		        	{{ Form::label('etiqueta', 'CENTRO DE INFORMACIÓN', array('class' => '')) }}
		        </div>
		        {{-- DATOS GENERALES DE LA CARPETA --}}
		        <div class="col-sm-5 container">
		        	<div class="container" style="border: 1px solid black;">
		        		{{ Form::label('etiqueta', 'Unidad:', array('class' => '')) }}
						<label for="">{{$DatosUnidad[0]->nombre}}</label>		        		
						<br>
		        		{{ Form::label('etiqueta', 'De:', array('class' => '')) }}
		        		<label for="">{{$DatosUnidad[0]->region}}</label>
		        		<br>
		        		{{ Form::label('etiqueta', 'Distrito:', array('class' => '')) }}
		        		<label for="">{{$DatosUnidad[0]->distrito}}</label>
		        		<br>
		        		{{ Form::label('etiqueta', 'Subprocuraduria:', array('class' => '')) }}
		        		<label for=""></label>
		        		<br>
		        		{{ Form::label('etiqueta', 'Inv. Ministeria:', array('class' => '')) }}
		        		<label for="">UIPJ/D{{$DatosUnidad[0]->distrito}}/{{$DatosUnidad[0]->numFiscal}}/{{$DatosUnidad[0]->numCarpeta}}/{{$DatosUnidad[0]->yearInicio}}</label>
		        		<br>
		        		{{ Form::label('etiqueta', 'Fecha de Inicio:', array('class' => '')) }}
		        		<label for="">{{$DatosUnidad[0]->fechaInicio}}</label>
		        		<br>
		        		{{ Form::label('etiqueta', 'Relevante:', array('class' => '')) }}
		        		<label for="">{{$DatosUnidad[0]->esRelevante}}</label>
		        		<br>
		        	</div>	
		        </div>	    		
	    	</div>
			<br>
			<div>
				{{-- DATOS DEL FISCAL --}}
				<div class="row">
					<div class="container col-sm-6">
						{{ Form::label('etiqueta', 'FISCAL: ', array('class' => '')) }}
		        		<label for=""> {{$DatosUnidad[0]->nombrefiscal}}</label>
		        		<label for=""> {{$DatosUnidad[0]->primerApfiscal}}</label>
		        		<label for=""> {{$DatosUnidad[0]->segundoApfiscal}}</label>
						
					</div>
					<div class="col-sm-6 container">
			        	{{ Form::label('etiqueta', 'NUMERO DE FISCAL: ', array('class' => '')) }}
		        		<label for="">{{$DatosUnidad[0]->numFiscal}}</label>
						
					</div>
				</div>

				<div class=" container">
					{{ Form::label('etiqueta', 'CON DETENIDO: ', array('class' => '')) }}
		        		<label for="">{{$DatosUnidad[0]->conDetenido}}</label>
				</div>
					
		        {{-- DATOS DEL DELITO Y LA TIPIFICAION DEL DELITO --}}
		        <div >
			        <div class="container" style="background: #767676; color: #ffffff;">
			        	{{ Form::label('etiqueta', 'DELITOS ', array('class' => '')) }}
					</div>
					<!--aqui inicia un foreach para replicar esta parte para los delitos-->
					{{--
						--}}
					@for($i=0; $i<count($DatosDelitos); $i++)
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
					@endfor
					{{--
						--}}
		        </div>

		        {{-- DATOS DE PERSONAS INVOLUCRADAS  --}}
		        <div>
			        <div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('etiqueta', 'PERSONAS INVOLUCRADAS: ', array('class' => '')) }}
					</div>
					

					<div>
						<div style="background: #a5a5a5;">
				        	{{ Form::label('etiqueta', 'AGRABIADOS: ', array('class' => '')) }}
						</div>
						@for($i=0; $i<count($DatosAgrabiado); $i++)
							<div class="row">
								<div class="col-sm-12">
									{{ Form::label('etiqueta', 'Nombre: ', array('class' => '')) }}
					        		<label for="">{{$DatosAgrabiado[$i]->nombres}}</label>
					        		<label for="">{{$DatosAgrabiado[$i]->primerAp}}</label>
					        		<label for="">{{$DatosAgrabiado[$i]->segundoAp}}</label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									{{ Form::label('etiqueta', 'Edad: ', array('class' => '')) }}
					        		<label for="">{{$DatosAgrabiado[$i]->edad}}</label>
								</div>
								<div class="col-sm-4">
									{{ Form::label('etiqueta', 'Sexo: ', array('class' => '')) }}
					        		<label for="">{{$DatosAgrabiado[$i]->sexo}}</label>
								</div>
								<div class="col-sm-4">
									{{ Form::label('etiqueta', 'Nacionalidad: ', array('class' => '')) }}
					        		<label for="">{{$DatosAgrabiado[$i]->nacionalidad}}</label>
								</div>
								<div class="col-sm-6">
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
								<div class="col-sm-6">
									{{ Form::label('etiqueta', 'Grado de Estudio: ', array('class' => '')) }}
					        		<label for="">{{$DatosAgrabiado[$i]->escolaridad}}</label>
								</div>
								<div class="col-sm-6">
									{{ Form::label('etiqueta', 'Estado civil: ', array('class' => '')) }}
					        		<label for="">{{$DatosAgrabiado[$i]->estadoCivil}}</label>
								</div>
								<div class="col-sm-6">
									{{ Form::label('etiqueta', 'Religión que profesa: ', array('class' => '')) }}
					        		<label for="">{{$DatosAgrabiado[$i]->religion}}</label>
								</div>	
							</div>
							<hr style="margin: 0;background: #a5a5a5;">
							@if($DatosAgrabiado[$i]->nombres && $DatosAgrabiado[$i]->primerAp && $DatosAgrabiado[$i]->segundoAp && $DatosAgrabiado[$i]->edad && $DatosAgrabiado[$i]->nacionalidad )
								@php
									$i=$i+1;
								@endphp
							@endif
						@endfor
					</div>

					<div>
						<div style="background: #a5a5a5;">
				        	{{ Form::label('etiqueta', 'IMPUTADOS: ', array('class' => '')) }}
						</div>
						@for($i=0; $i<count($DatosImputado); $i++)
							<div class="row">
								<div class="col-sm-12">
									{{ Form::label('etiqueta', 'Nombre: ', array('class' => '')) }}
					        		<label for="">{{$DatosImputado[$i]->nombres}}</label>
					        		<label for="">{{$DatosImputado[$i]->primerAp}}</label>
					        		<label for="">{{$DatosImputado[$i]->segundoAp}}</label>
								</div>
								<div class="col-sm-4">
									{{ Form::label('etiqueta', 'Edad: ', array('class' => '')) }}
					        		<label for="">{{$DatosImputado[$i]->edad}}</label>
								</div>
								<div class="col-sm-4">
									{{ Form::label('etiqueta', 'Sexo: ', array('class' => '')) }}
					        		<label for="">{{$DatosImputado[$i]->sexo}}</label>
								</div>
								<div class="col-sm-4">
									{{ Form::label('etiqueta', 'Nacionalidad: ', array('class' => '')) }}
					        		<label for="">{{$DatosImputado[$i]->nacionalidad}}</label>
								</div>
								<div class="col-sm-6">
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
								<div class="col-sm-6">
									{{ Form::label('etiqueta', 'Grado de Estudio: ', array('class' => '')) }}
					        		<label for="">{{$DatosImputado[$i]->escolaridad}}</label>
								</div>
								<div class="col-sm-6">
									{{ Form::label('etiqueta', 'Estado civil: ', array('class' => '')) }}
					        		<label for="">{{$DatosImputado[$i]->estadoCivil}}</label>
								</div>
								<div class="col-sm-6">
									{{ Form::label('etiqueta', 'Religión que profesa: ', array('class' => '')) }}
					        		<label for="">{{$DatosImputado[$i]->religion}}</label>
								</div>	
							</div>
							<hr style="margin: 0;background: #a5a5a5;">
							
								@php
									if ( $i=0 || $DatosImputado[$i]->nombres && $DatosImputado[$i]->primerAp && $DatosImputado[$i]->segundoAp && $DatosImputado[$i]->edad && $DatosImputado[$i]->nacionalidad) {
										
									$i=$i+1;
									}
								@endphp
							
						@endfor
					</div>
		        </div>
				
				<div>
			        <div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('etiqueta', 'ACUSACIÓN: ', array('class' => '')) }}
					</div>
					<table align="center">
						<thead >
							<th>Denunciante</th>
							<th>Delito</th>
							<th>Denunciado</th>
						</thead>
						<tbody>
							
						</tbody>
					</table>
					<div class="row" align="center">
						<div class="col-sm-4" >
							{{ Form::label('etiqueta', 'Agraviado ', array('class' => '')) }}
						</div>
						<div class="col-sm-4" >
							{{ Form::label('etiqueta', 'Delito ', array('class' => '')) }}
						</div>
						<div class="col-sm-4" >
							{{ Form::label('etiqueta', 'Imputado ', array('class' => '')) }}
						</div>

						<div class="col-sm-4">
			        		<label for=""></label>
			        		<label for=""></label>
			        		<label for=""></label>
						</div>
						
						<div class="col-sm-4">
							<label for=""></label>
			        		<label for=""></label>
			        		<label for=""></label>
						</div>

						<div class="col-sm-4">
			        		<label for=""></label>
			        		<label for=""></label>
			        		<label for=""></label>
						</div>
					</div>
				</div>
				
				<div>
					<div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('etiqueta', 'ESTADO DE LA CARPETA: ', array('class' => '')) }}
					</div>
					<div class="row">
						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'Estado de la Carpeta: ', array('class' => '')) }}
			        		<label for=""></label>
						</div>

						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'Fecha de Determinación: ', array('class' => '')) }}
			        		<label for=""></label>
						</div>

						<div class="col-sm-4">
							{{ Form::label('etiqueta', 'Tipo de Determinación: ', array('class' => '')) }}
			        		<label for=""></label>
						</div>
					</div>
				</div>

				<div>
					<div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('etiqueta', 'DESCRIPCIÓN DE LA RELEVANCIA: ', array('class' => '')) }}
					</div>
					<div>
		        		<label for=""></label>
					</div>
				</div>
				
				<div>
					<div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('etiqueta', 'DESCRIPCIÓN DE LOS HECHOS: ', array('class' => '')) }}
					</div>
					<div>
		        		<label for=""></label>
					</div>
				</div>

				<div>
					<div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('etiqueta', 'OBSERVACIONES: ', array('class' => '')) }}
					</div>
					<div>
		        		<label for=""></label>
					</div>
				</div>
			</div>
	    </div>
	</div>
@endsection