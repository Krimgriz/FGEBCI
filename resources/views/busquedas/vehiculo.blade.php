@extends('index')
@section('content')
	<br>
    
	<div class="fondo">

        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a style="width: 100%" class="btn btn-secondary" href="{{url('busqueda_vehiculoInvolucrado')}}">Vehiculos Involucrados</a>
                </div>
                <div class="col-sm-6">
                    <a style="width: 100%" class="btn btn-secondary" href="{{url('busqueda_vehiculoRobado')}}">Vehiculos Robados</a>
                </div>
            </div>
        </div>
        
        <br>
        <table class="table table-striped table-hover table-bordered" id="tabladirecciones">
            <thead>
                <tr>
                    <th>ID</th>
                    <td>Número de Carpeta</td>
                    <td>UIPJ</td>
                    <td>Placas</td>
                    <td>Modelo</td>
                    <td>Marca</td>
                    <td>Número de Serie</td>
                    <td>Status</td>
                    <td>Estado</td>
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
                "ajax": "busquedaVData",
                "columns": [
                    { data: 'id' , name: 'id'},
                    { data: 'numCarpeta' , name: 'numCarpeta'},
                    { data: 'unidad' , name: 'unidad'},
                    { data: 'placas' , name: 'placas'},
                    { data: 'modelo' , name: 'modelo'},
                    { data: 'marca' , name: 'marca'},
                    { data: 'numSerie' , name: 'numSerie'},
                    { data: 'status' , name: 'status'},
                    { data: 'estado' , name: 'estado'},
                    { data: null,  render: function ( data, type, row ) {
                        return "<a href='{{ url('detalle') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Ver</button>"  }  
                    }
                ]
            });
        });
    </script>

@endsection