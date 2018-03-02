<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{($DatosUnidad[0]->numCarpeta)}}</title>
    <link rel="icon" href="{{ asset('img/FGE-icon3.png') }}">
    
    @include('cdn')
    <link href="{{ asset('css/estilosnavbar.css') }}" rel="stylesheet">
    <style>
    	label {
    		font-size: 11px;
    		
    	}
    </style>
    </head>
<body>

{{--dd($DatosUnidad[0]->nombre)--}}

<div>
	<div  >
		
		<div class="row">    
			<div class="col-2">
				
				<img src="{{ url('/img/FGE-icon.png') }}" class="img-fluid" alt="">
			</div>
			
			<div class="col-5" align="center" style="margin-left: 120px;">
					
				<label for="" style="text-align: center;">FORMATO DE CARPETAS DE INVESTIGACIÓN</label>
				<br>
				<label for="" style="margin-left: 75px;">Información Básica</label>
				<br>
				<label for="" style="margin-left: 50px;">CENTRO DE INFORMACIÓN</label>
				
			</div>
			{{-- DATOS GENERALES DE LA CARPETA --}}
			@include('reporte.reportePDF.pdfUnidad')	    		
		</div>
		
		{{-- DATOS DEL FISCAL --}}
		@include('reporte.reportePDF.pdfFiscal')

		@include('reporte.reportePDF.pdfCarpeta')
		{{-- DATOS DEL DELITO Y LA TIPIFICAION DEL DELITO --}}

		@include('reporte.reportePDF.pdfDelitos')	

		{{-- DATOS DE PERSONAS INVOLUCRADAS  --}}
		<div>
			<div  style="background: #767676; color: #ffffff;">
				<label for="" style="margin-left: 10px;">PERSONAS INVOLUCRADAS:</label>
			</div>

			@include('reporte.reportePDF.pdfDenunciantes')

			@include('reporte.reportePDF.pdfDenunciados')

		</div>

		@include('reporte.reportePDF.pdfAcusaciones')
		
		@include('reporte.reportePDF.pdfVehiculos')


		@include('reporte.reportePDF.pdfdescripcionHechos')



		
	</div>
</div>
<br>	
</body>
</html>
