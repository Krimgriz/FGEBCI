<div>
	<div style="background: #767676; color: #ffffff;">
		{{ Form::label('etiqueta', ' ACUSACIÓN: ', array('class' => '')) }}
	</div>
	<table align="center" style="text-align: center; width: 1000px;">
		<thead style="text-align: center; width: 100%;">
			<th>Denunciante</th>
			<th>Delito</th>
			<th>Denunciado</th>
		</thead>
		<tbody style="text-align: center; width: 100%;">
			@for ($i = 0; $i <count($DatosAgrabiado) ; $i++)
			<tr class="table-secondary" style="">
				
				<td>  {{$DatosAgrabiado[$i]->nombres}} {{$DatosAgrabiado[$i]->primerAp}} {{$DatosAgrabiado[$i]->segundoAp}}  </td>
				<td>  {{$DatosImputado[$i]->delito}}  </td>
				<td>  {{$DatosImputado[$i]->nombres}} {{$DatosImputado[$i]->primerAp}} {{$DatosImputado[$i]->segundoAp}}  </td>
			</tr>
			@endfor

		</tbody>
	</table>
	
</div>