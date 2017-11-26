@extends('index')
@section('content')
	<br>
    
	<div class="fondo">
        <br>
        <table class="table table-striped table-hover table-bordered" id="tablaagrabiado">
            <thead>
                <tr>
                    <th>ID</th>
                    <td>Nombre</td>
                    <td>Primer Apellido</td>
                    <td>Segundo Apellido</td>
                    <td>Número de Carpeta</td>
                    <td>Regional</td>
                    <td>UIPJ</td>
                    <td>Acción</td>
                </tr>
            </thead>
            
        </table>
    </div>

    
    <script>
        $(document).ready(function(){
            $('#tablaagrabiado').DataTable({
                "processing": true,
                "serverSide": true,
                "pageLength": 20,
                "language": {
                         "url": '{!! asset('/datatables/latino.json') !!}'
                          } ,
                "ajax": "busquedaPAData",
                "columns": [
                    { data: 'id' , name: 'id'},
                    { data: 'nombres' , name: 'nombre'},
                    { data: 'primerAp' , name: 'primerAp'},
                    { data: 'segundoAp' , name: 'segundoAp'},
                    { data: 'numCarpeta' , name: 'numCarpeta'},
                    { data: 'region' , name: 'region'},
                    { data: 'unidad' , name: 'unidad'},
                    { data: null,  render: function ( data, type, row ) {
                        return "<a href='{{ url('detalle') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Ver</button>"  }  
                    }
                ]
            });
        });
    </script>

@endsection