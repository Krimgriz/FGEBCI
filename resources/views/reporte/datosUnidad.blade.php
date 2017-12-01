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