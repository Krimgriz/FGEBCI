@extends('index')
@section('content')
	<br>
    
	<div class="fondo">
        <br>
        <table class="table table-striped table-hover table-bordered" id="tabladirecciones">
            <thead>
                <tr>
                    <th>ID</th>
                    <td>Número de Carpeta</td>
                    <td>UIPJ</td>
                    <td>Regino</td>
                    <td>Nombre</td>
                    <td>Primer Apellido</td>
                    <td>Segundo Apellido</td>
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
                "ajax": "busquedaNCData",
                "columns": [
                    { data: 'id' , name: 'id'},
                    { data: 'numCarpeta' , name: 'numCarpeta'},
                    { data: 'unidad' , name: 'unidad'},
                    { data: 'region' , name: 'region'},
                    { data: 'nombres' , name: 'nombres'},
                    { data: 'primerAp' , name: 'primerAp'},
                    { data: 'segundoAp' , name: 'segundoAp'},
                    { data: null,  render: function ( data, type, row ) {
                        return "<a href='{{ url('detalle') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Ver</button>"  }  
                    }
                ]
            });
        });
    </script>

@endsection