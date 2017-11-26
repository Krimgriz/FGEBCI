@extends('index')
@section('content')
	<br>
    
	<div class="fondo">
        <br>
        <table class="table table-striped table-hover table-bordered" id="tabladirecciones">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Número de Carpeta</td>
                    <td>UIPJ</td>
                    <td>Placas</td>
                    <td>Modelo</td>
                    <td>Marca</td>
                    <td>Número de Serie</td>
                    <td>Fecha de Reporte</td>
                    <td>Acción</td>
                </tr>
            </thead>
            
        </table>
    </div>

    
    <script>
        $(document).ready(function(){
            $('#tabladirecciones').DataTable({
                "processing": true,
                "serverSide": true,
                "pageLength": 20,
                "language": {
                         "url": '{!! asset('/datatables/latino.json') !!}'
                          } ,
                "ajax": "busquedaVRData",
                "columns": [
                    { data: 'id' , name: 'id'},
                    { data: 'numCarpeta' , name: 'numCarpeta'},
                    { data: 'unidad' , name: 'unidad'},
                    { data: 'placas' , name: 'placas'},
                    { data: 'modelo' , name: 'modelo'},
                    { data: 'marca' , name: 'marca'},
                    { data: 'numSerie' , name: 'numSerie'},
                    { data: 'fecha' , name: 'fecha'},
                    { data: null,  render: function ( data, type, row ) {
                        return "<a href='{{ url('detalle') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Ver</button>"  }  
                    }
                ]
            });
        });
    </script>

@endsection