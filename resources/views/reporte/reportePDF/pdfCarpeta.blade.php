<div>
	<div  style="background: #767676; color: #ffffff;">
		<label for="" style="margin-left: 10px;"> ESTADO DE LA CARPETA: </label>
	</div>
	<div >
		<div class="col-sm-12">
			<label for="">Estado de la Carpeta: {{$DatosUnidad[0]->estadoCarpeta}}</label>
		
			<label for="" style="position: absolute;left: 365px;">Fecha de Inicio: {{$DatosUnidad[0]->fechaInicio}}</label>
		</div>
		@if ($DatosUnidad[0]->estadoCarpeta!='INICIO')

			<div class="col-sm-12">
				<label for="">Tipo de Determinación: {{$DatosUnidad[0]->tipoDeterminacion}}</label>
				@php
					if ($DatosUnidad[0]->fechaDeterminacion==null) {
						$DatosUnidad[0]->fechaDeterminacion="SIN DETERMINACION";
					}
				@endphp
				<label for="" style="position: absolute;left: 365px;">Fecha de Determinación: {{$DatosUnidad[0]->fechaDeterminacion}}</label>
			</div>
		@endif
	</div>
</div>