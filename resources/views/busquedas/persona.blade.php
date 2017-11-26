@extends('index')
@section('content')
	<br>
	<div class="fondo">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a style="width: 100%" class="btn btn-secondary" href="{{url('busqueda_personaDenunciada')}}">Pesonas Imputadas</a>
                </div>
                <div class="col-sm-6">
                    <a style="width: 100%" class="btn btn-secondary" href="{{url('busqueda_personaDenunciante')}}">Pesonas Agraviadas</a>
                </div>
            </div>
        </div>
        
        <br>
        <table class="table table-striped table-hover table-bordered" id="tablapersonas">
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
            $('#tablapersonas').DataTable({
                "processing": true,
                "serverSide": true,
                "pageLength": 20,
                "language": {
                         "url": '{!! asset('/datatables/latino.json') !!}'
                          } ,
                "ajax": "busquedaPData",
                "columns": [
                    { data: 'id' , name: 'id'},
                    { data: 'nombres' , name: 'nombre'},
                    { data: 'primerAp' , name: 'localidad'},
                    { data: 'segundoAp' , name: 'colonia'},
                    { data: 'numCarpeta' , name: 'numCarpeta'},
                    { data: 'region' , name: 'unidad'},
                    { data: 'unidad' , name: 'unidad'},
                    { data: null,  render: function ( data, type, row ) {
                        return "<a href='{{ url('detalle') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Ver</button>"  }  
                    }
                ]
            });
        });
    </script>

@endsection