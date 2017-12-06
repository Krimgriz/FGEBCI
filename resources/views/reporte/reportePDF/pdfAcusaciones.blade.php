<div>
	<div style="background: #767676; color: #ffffff;">
		<label for="" style="margin-left: 10px;"> ACUSACIÓN: </label>
	</div>
	<table align="center" class="table table-secondary" style="font-size: 11px ;text-align: center;">
		<thead> 
			<tr>
				<th>Denunciante</th>
				<th>Delito</th>
				<th>Denunciado</th>
			</tr>
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