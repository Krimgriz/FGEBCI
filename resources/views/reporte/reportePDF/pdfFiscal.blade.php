<div class="row">
	<br>
	<div class=" col-sm-6">
		{{ Form::label('etiqueta', 'FISCAL: ', array('class' => '')) }}
		<label for=""> {{$DatosUnidad[0]->nombrefiscal}}</label>
		<label for=""> {{$DatosUnidad[0]->primerApfiscal}}</label>
		<label for=""> {{$DatosUnidad[0]->segundoApfiscal}}</label>

	</div>
	<div class="col-sm-6 ">
		{{ Form::label('etiqueta', 'NUMERO DE FISCAL: ', array('class' => '')) }}
		<label for="">{{$DatosUnidad[0]->numFiscal}}</label>

	</div>
</div>

<div >
	{{ Form::label('etiqueta', 'CON DETENIDO: ', array('class' => '')) }}
	<label for="">{{$DatosUnidad[0]->conDetenido}}</label>
</div>