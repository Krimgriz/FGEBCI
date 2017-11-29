@extends('index')
@section('content')

    
	<div class="fondo">
        <br>
        <div class="container">

            <div class="row">
                <div class="col-12" id="filter_global">
                    <label for="">Busqueda Global</label>
                    <input class="global_filter form-control form-control-sm" id="global_filter" type="text">
                </div>

                <div id="filter_Marca" class="col-3">
                    <label for="">Marca: </label>
                    <input class="colMarca_filter form-control form-control-sm" id="colMarca_filter" type="text">
                </div>
                

                <div id="filter_Placas" class="col-3">
                    <label for="">Placas: </label>
                    <input class="colPlacas_filter form-control form-control-sm" id="colPlacas_filter" type="text">
                </div>
                
                <div id="filter_Modelo" class="col-3">
                    <label for="">Modelo: </label>
                    <input class="colModelo_filter form-control form-control-sm" id="colModelo_filter" type="text">
                </div>

                <div id="filter_fecha" class="col-3">
                    <label for="">Fecha de Reporte: </label>
                    <input class="colfecha_filter form-control form-control-sm" id="colfecha_filter" type="text">
                </div>

                <div id="filter_unidad" class="col-4">
                    <label for="">UIPJ: </label>
                    <input class="colUnidad_filter form-control form-control-sm" id="colUnidad_filter" type="text">
                </div>
                
                <div id="filter_NumSerie" class="col-4">
                    <label for="">Número de Serie: </label>
                    <input class="colNumSerie_filter form-control form-control-sm" id="colNumSerie_filter" type="text">
                </div>

                <div id="filter_NumMotor" class="col-4">
                    <label for="">Número de Motor: </label>
                    <input class="colNumMotor_filter form-control form-control-sm" id="colNumMotor_filter" type="text">
                </div>    
            </div>
            
            
        </div>
        <br>
        <div class="table-responsive">
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
                        <td>Número de Motor</td>
                        <td>Fecha de Reporte</td>
                        <td>Acción</td>
                    </tr>
                </thead>
                
            </table>
            
        </div>
    </div>

    
    <script>
        function filterGlobal () {
            $('#tabladirecciones').DataTable().search(
                $('#global_filter').val()
            ).draw();
        }
         
        function filterColumnNumMotor () {
            $('#tabladirecciones').DataTable().column(7).search(
                $('#colNumMotor_filter').val()
            ).draw();
        }

        function filterColumnMarca () {
            $('#tabladirecciones').DataTable().column(5).search(
                $('#colMarca_filter').val()
            ).draw();
        }

        function filterColumnNumSerie () {
            $('#tabladirecciones').DataTable().column(6).search(
                $('#colNumSerie_filter').val()
            ).draw();
        }

        function filterColumnModelo () {
            $('#tabladirecciones').DataTable().column(4).search(
                $('#colModelo_filter').val()
            ).draw();
        }
        
        function filterColumnPlacas () {
            $('#tabladirecciones').DataTable().column(3).search(
                $('#colPlacas_filter').val()
            ).draw();
        }

        function filterColumnUnidad () {
            $('#tabladirecciones').DataTable().column(2).search(
                $('#colUnidad_filter').val()
            ).draw();
        }

        function filterColumnFecha () {
            $('#tabladirecciones').DataTable().column(8).search(
                $('#colfecha_filter').val()
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
                "ajax": "busquedaVRData",
                "columns": [
                    { data: 'id' , name: 'id'},
                    { data: 'numCarpeta' , name: 'numCarpeta'},
                    { data: 'unidad' , name: 'unidad'},
                    { data: 'placas' , name: 'placas'},
                    { data: 'modelo' , name: 'modelo'},
                    { data: 'marca' , name: 'marca'},
                    { data: 'numSerie' , name: 'numSerie'},
                    { data: 'numMotor' , name: 'numMotor'},
                    { data: 'fecha' , name: 'fecha'},
                    { data: null,  render: function ( data, type, row ) {
                        return "<a href='{{ url('detalle') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Ver</button>"  }  
                    }
                ]
            });

            $('input.global_filter').on( 'keyup click', function () {
                filterGlobal();
            } );
         
            $('input.colNumMotor_filter').on( 'keyup click', function () {
                filterColumnNumMotor();
            } );

            $('input.colModelo_filter').on( 'keyup click', function () {
                filterColumnModelo();
            } );

            $('input.colNumSerie_filter').on( 'keyup click', function () {
                filterColumnNumSerie();
            } );

            $('input.colMarca_filter').on( 'keyup click', function () {
                filterColumnMarca();
            } );

            $('input.colPlacas_filter').on( 'keyup click', function () {
                filterColumnPlacas();
            } );

            $('input.colUnidad_filter').on( 'keyup click', function () {
                filterColumnUnidad();
            } );

            $('input.colfecha_filter').on( 'keyup click', function () {
                filterColumnFecha();
            } );
        });
    </script>

@endsection