@extends('index')
@section('content')
	<br>
    
	<div class="fondo">
        <br>
        <table class="table table-striped table-hover table-bordered" id="tabladirecciones">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Primer Apellido</td>
                    <td>Segundo Apellido</td>
                    <td>Alias</td>
                    <td>Número de Carpeta</td>
                    <td>Delito</td>
                    <td>UIPJ</td>
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
                "ajax": "busquedaPIData",
                "columns": [
                    { data: 'id' , name: 'id'},
                    { data: 'nombres' , name: 'nombre'},
                    { data: 'primerAp' , name: 'localidad'},
                    { data: 'segundoAp' , name: 'colonia'},
                    { data: 'alias' , name: 'alias'},
                    { data: 'numCarpeta' , name: 'numCarpeta'},
                    { data: 'delito' , name: 'delito'},
                    { data: 'unidad' , name: 'unidad'},
                    { data: null,  render: function ( data, type, row ) {
                        return "<a href='{{ url('detalle') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Ver</button>"  }  
                    }
                ]
            });
        });
    </script>

@endsection