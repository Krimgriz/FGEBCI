@extends('index')
@section('content')
	<br>
    
	<div class="fondo">
        <br>
        <table class="table table-striped table-hover table-bordered" id="tabladirecciones">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Municipio</th>
                    <th>Localidad</th>
                    <th>Colonia</th>
                    <th>Código Postal</th>
                    <th>Calle</th>
                    <th>Número de Carpeta</th>
                    <th>Delito</th>
                    <th>UIPJ</th>
                    <th>Acción</th>
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
                "ajax": "busquedaDData",
                "columns": [
                    { data: 'id' , name: 'id'},
                    { data: 'municipio' , name: 'municipio'},
                    { data: 'localidad' , name: 'localidad'},
                    { data: 'colonia' , name: 'colonia'},
                    { data: 'codigoPostal' , name: 'codigoPostal'},
                    { data: 'calle' , name: 'calle'},
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