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
        <div class="container">
            
            <table style="width: 80%; margin: 0 auto 0 auto;"  border="0">
                
                <tbody>
                    <tr id="filter_global">
                        <td style="width: 15%; text-align: right;">Busqueda Global</td>
                        <td align="center"><input class="global_filter form-control" id="global_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col2" data-column="2">
                        <td style="width: 15%; text-align: right;">UIPJ</td>
                        <td align="center"><input class="column_filter form-control" id="col2_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col3" data-column="3">
                        <td style="width: 15%; text-align: right;">Placas</td>
                        <td align="center"><input class="column_filter form-control" id="col3_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col4" data-column="4">
                        <td style="width: 15%; text-align: right;">Modelo</td>
                        <td align="center"><input class="column_filter form-control" id="col4_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col5" data-column="5">
                        <td style="width: 15%; text-align: right;">Marca</td>
                        <td align="center"><input class="column_filter form-control" id="col5_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col6" data-column="6">
                        <td style="width: 15%; text-align: right;">Número de Serie</td>
                        <td align="center"><input class="column_filter form-control" id="col6_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col8" data-column="8">
                        <td style="width: 15%; text-align: right;">Estado</td>
                        <td align="center"><input class="column_filter form-control" id="col8_filter" type="text"></td>
                        
                    </tr>
                </tbody>
            </table>
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
        function filterGlobal () {
            $('#tabladirecciones').DataTable().search(
                $('#global_filter').val()
            ).draw();
        }
         
        function filterColumn ( i ) {
            $('#tabladirecciones').DataTable().column( i ).search(
                $('#col'+i+'_filter').val()
            ).draw();
        }

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

            $('input.global_filter').on( 'keyup click', function () {
                filterGlobal();
            } );
         
            $('input.column_filter').on( 'keyup click', function () {
                filterColumn( $(this).parents('tr').attr('data-column') );
            } );
        });
    </script>

@endsection