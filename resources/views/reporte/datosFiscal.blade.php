<div class="row">
	<div class="container col-sm-5">
		<label for="">FISCAL:  {{$DatosUnidad[0]->nombrefiscal}} {{$DatosUnidad[0]->primerApfiscal}} {{$DatosUnidad[0]->segundoApfiscal}}</label>

	</div>
	<div class=" container col-sm-4">
		{{ Form::label('etiqueta', 'CON DETENIDO: ', array('class' => '')) }}
		<label for="">{{$DatosUnidad[0]->conDetenido}}</label>
	</div>
	<div class="col-sm-3 container">
		<label for="">RELEVANTE: {{$DatosUnidad[0]->esRelevante}}</label>

	</div>
</div>
