@extends('index')
@section('content')
	<br>

	<div class="fondo">
	    <div class="container" style="border:1px solid black;" >
	    	<br>
	    	<div class="row">    
		        <div class="col-sm-2"><img src="{{ url('/img/FGE-icon.png') }}" class="img-fluid" alt=""></div>
		        <div class="col-sm-5" align="center">
		        	{{ Form::label('titulo', 'FORMATO DE INVESTIGACIONES MINISTERIALES', array('class' => '')) }}
		        	<br>
		        	{{ Form::label('titulo', 'Información Básica', array('class' => '')) }}
		        	<br>
		        	{{ Form::label('titulo', 'CENTRO DE INFORMACIÓN', array('class' => '')) }}
		        </div>
		        {{-- DATOS GENERALES DE LA CARPETA --}}
		        <div class="col-sm-5 container">
		        	<div class="container" style="border: 1px solid black;">
		        		{{ Form::label('titulo', 'Agencia:', array('class' => '')) }}{{ Form::label('titulo', 'XXXXXXXXXXXX', array('class' => '')) }}
		        		<br>
		        		{{ Form::label('titulo', 'De:', array('class' => '')) }}{{ Form::label('titulo', 'XXXXXXXXXXXX', array('class' => '')) }}
		        		<br>
		        		{{ Form::label('titulo', 'Distrito:', array('class' => '')) }}{{ Form::label('titulo', 'XXXXXXXXXXXX', array('class' => '')) }}
		        		<br>
		        		{{ Form::label('titulo', 'Subprocuraduria:', array('class' => '')) }}{{ Form::label('titulo', 'XXXXXXXXXXXX', array('class' => '')) }}
		        		<br>
		        		{{ Form::label('titulo', 'Inv. Ministeria:', array('class' => '')) }}{{ Form::label('titulo', 'XXXXXXXXXXXX', array('class' => '')) }}
		        		<br>
		        		{{ Form::label('titulo', 'Fecha de Inicio:', array('class' => '')) }}{{ Form::label('titulo', 'XXXXXXXXXXXX', array('class' => '')) }}
		        		<br>
		        		{{ Form::label('titulo', 'Periodo que reporta:', array('class' => '')) }}{{ Form::label('titulo', 'XXXXXXXXXXXX', array('class' => '')) }}
		        		<br>
		        		{{ Form::label('titulo', 'Relevante:', array('class' => '')) }}{{ Form::label('titulo', 'XXXXXXXXXXXX', array('class' => '')) }}
		        		<br>
		        	</div>	
		        </div>	    		
	    	</div>
			<br>
			<div>
				{{-- DATOS DEL FISCAL --}}
				<div class="row">
					<div class="container col-sm-6">
						{{ Form::label('titulo', 'FISCAL: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						
					</div>
					<div class="col-sm-6 container">
			        	{{ Form::label('titulo', 'NUMERO DE FISCAL: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						
					</div>
				</div>

				<div class=" container">
					{{ Form::label('titulo', 'CON DETENIDO: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}						
				</div>
					
		        {{-- DATOS DEL DELITO Y LA TIPIFICAION DEL DELITO --}}
		        <div >
			        <div class="container" style="background: #767676; color: #ffffff;">
			        	{{ Form::label('titulo', 'DELITOS ', array('class' => '')) }}
					</div>
					<!--aqui inicia un foreach para replicar esta parte para los delitos-->
			        <div class="container" style="background: #a5a5a5;">
			        	{{ Form::label('titulo', 'DELITO ', array('class' => '')) }}
					</div>
					<div class="row">
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Tipo de Delito: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Forma de Comisión: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Modalidad: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Consumación: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Con Violencia: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Tipo de Violencia: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-12">
							{{ Form::label('titulo', 'Medio Utilizado para Cometer el Delito: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>

						<!--direccion donde ocurrieron los hechos-->
						<div class="col-sm-12" align="center">
							{{ Form::label('titulo', 'COMISION DEL ILICITO ', array('class' => '')) }}
						</div>

						<div class="col-sm-6">
							{{ Form::label('titulo', 'Fecha en que Ocurrieron los hechos: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Hora: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Zona de ubicación: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Lugar donde ocurrieron los hechos: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Municipio: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Localidad: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Colonia: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-6">
							{{ Form::label('titulo', 'Numero Externo: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						<div class="col-sm-12">
							{{ Form::label('titulo', 'Calle: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
					</div>
		        </div>

		        {{-- DATOS DE PERSONAS INVOLUCRADAS  --}}
		        <div>
			        <div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('titulo', 'PERSONAS INVOLUCRADAS: ', array('class' => '')) }}
					</div>
					

					<div>
						<div style="background: #a5a5a5;">
				        	{{ Form::label('titulo', 'AGRABIADOS: ', array('class' => '')) }}
						</div>
						<div class="row">
							<div class="col-sm-12">
								{{ Form::label('titulo', 'Nombre: ', array('class' => '')) }}
								{{ Form::label('nombre', 'XXXXXXXXXXXX', array('class' => '')) }}
								{{ Form::label('primeAp', 'XXXXXXXXXXXX ', array('class' => '')) }}
								{{ Form::label('segundoAp', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								{{ Form::label('titulo', 'Edad: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-4">
								{{ Form::label('titulo', 'Sexo: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-4">
								{{ Form::label('titulo', 'Nacionalidad: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Entidad Federativa de Origen: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Ocupación: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Lugar de trabajo: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Grado de Estudio: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Estado civil: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Religión que profesa: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>	
						</div>
						
					</div>

					<div>
						<div style="background: #a5a5a5;">
				        	{{ Form::label('titulo', 'IMPUTADOS: ', array('class' => '')) }}
						</div>
						<div class="row">
							<div class="col-sm-4">
								{{ Form::label('titulo', 'Edad: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-4">
								{{ Form::label('titulo', 'Sexo: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-4">
								{{ Form::label('titulo', 'Nacionalidad: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Entidad Federativa de Origen: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Ocupación: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Lugar de trabajo: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Grado de Estudio: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Estado civil: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>
							<div class="col-sm-6">
								{{ Form::label('titulo', 'Religión que profesa: ', array('class' => '')) }}{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
							</div>	
						</div>
						
					</div>
		        </div>
				
				<div>
			        <div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('titulo', 'ACUSACIÓN: ', array('class' => '')) }}
					</div>
					<div class="row" align="center">
						<div class="col-sm-4" >
							{{ Form::label('titulo', 'Agraviado ', array('class' => '')) }}
						</div>
						<div class="col-sm-4" >
							{{ Form::label('titulo', 'Delito ', array('class' => '')) }}
						</div>
						<div class="col-sm-4" >
							{{ Form::label('titulo', 'Imputado ', array('class' => '')) }}
						</div>

						<div class="col-sm-4">
							{{ Form::label('nombre', 'XXXXXXXXXXXX', array('class' => '')) }}
							{{ Form::label('primeAp', 'XXXXXXXXXXXX ', array('class' => '')) }}
							{{ Form::label('segundoAp', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
						
						<div class="col-sm-4">
							{{ Form::label('titulo', 'Delito', array('class' => '')) }}
						</div>

						<div class="col-sm-4">
							{{ Form::label('nombre', 'XXXXXXXXXXXX', array('class' => '')) }}
							{{ Form::label('primeAp', 'XXXXXXXXXXXX ', array('class' => '')) }}
							{{ Form::label('segundoAp', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
					</div>
				</div>
				
				<div>
					<div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('titulo', 'ESTADO DE LA CARPETA: ', array('class' => '')) }}
					</div>
					<div class="row">
						<div class="col-sm-4">
							{{ Form::label('titulo', 'Estado de la Carpeta: ', array('class' => '')) }}
							{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>

						<div class="col-sm-4">
							{{ Form::label('titulo', 'Fecha de Determinación: ', array('class' => '')) }}
							{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>

						<div class="col-sm-4">
							{{ Form::label('titulo', 'Tipo de Determinación: ', array('class' => '')) }}
							{{ Form::label('nombrefiscal', 'XXXXXXXXXXXX', array('class' => '')) }}
						</div>
					</div>
				</div>

				<div>
					<div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('titulo', 'DESCRIPCIÓN DE LA RELEVANCIA: ', array('class' => '')) }}
					</div>
					<div>
						{{ Form::label('titulo', 'XXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXX XXXXXXXXXXXXXX XXXXXXXXXXXXX XXXXXXXXXXXXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXXXX X XXXXXXXXXXXX X XXXXXXXXXXXXXX XXXX ', array('class' => '')) }}
					</div>
				</div>
				
				<div>
					<div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('titulo', 'DESCRIPCIÓN DE LOS HECHOS: ', array('class' => '')) }}
					</div>
					<div>
						{{ Form::label('titulo', 'XXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXX XXXXXXXXXXXXXX XXXXXXXXXXXXX XXXXXXXXXXXXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXXXX X XXXXXXXXXXXX X XXXXXXXXXXXXXX XXXX ', array('class' => '')) }}
					</div>
				</div>

				<div>
					<div style="background: #767676; color: #ffffff;">
			        	{{ Form::label('titulo', 'OBSERVACIONES: ', array('class' => '')) }}
					</div>
					<div>
						{{ Form::label('titulo', 'XXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXX XXXXXXXXXXXXXX XXXXXXXXXXXXX XXXXXXXXXXXXXXXX XXXXXXXXXXXXXXX XXXXXXXXXXXXX X XXXXXXXXXXXX X XXXXXXXXXXXXXX XXXX ', array('class' => '')) }}
					</div>
				</div>
			</div>
	    </div>
	</div>
@endsection