<div>
	<div class="container" style="background: #767676; color: #ffffff;">
		{{ Form::label('etiqueta', ' ACUSACIÓN: ', array('class' => '')) }}
	</div>
	<table align="center" style="text-align: center;" class="table">
		<thead >
			<th>Denunciante</th>
			<th>Delito</th>
			<th>Denunciado</th>
		</thead>
		<tbody>
			@for ($i = 0; $i <count($DatosAgrabiado) ; $i++)
			<tr class="table-secondary">
				
				<td>  {{$DatosAgrabiado[$i]->nombres}} {{$DatosAgrabiado[$i]->primerAp}} {{$DatosAgrabiado[$i]->segundoAp}}  </td>
				<td>  {{$DatosImputado[$i]->delito}}  </td>
				<td>  {{$DatosImputado[$i]->nombres}} {{$DatosImputado[$i]->primerAp}} {{$DatosImputado[$i]->segundoAp}}  </td>
			</tr>
			@endfor

		</tbody>
	</table>
	
</div>