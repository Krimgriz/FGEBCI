@extends('index')
@section('content')
	<div class="fondo">
    <br>
    <center>
        <h4>BUSQUEDA POR NUMERO DE CARPETA</h4>
    </center>
        <div class="container">


            <div class="row">
                <div class="col-12" id="filter_global">
                    <label for="">Busqueda Global</label>
                    <input class="global_filter form-control form-control-sm" id="global_filter" type="text">
                </div>

                
                <div id="filter_unidad" class="col-4">
                    <label for="">UIPJ: </label>
                    <input class="colUnidad_filter form-control form-control-sm" id="colUnidad_filter" type="text">
                </div>

                <div id="filter_region" class="col-4">
                    <label for="">Región: </label>
                    <input class="colRegion_filter form-control form-control-sm" id="colRegion_filter" type="text">
                </div>
                
                <div id="filter_fecha" class="col-4">
                    <label for="">Fecha De Inicio: </label>
                    <input class="colfecha_filter form-control form-control-sm" id="colfecha_filter" type="text">
                </div>

                <div id="filter_NumCarpeta" class="col-4">
                    <label for="">Numero de Carpeta: </label>
                    <input class="colNumCarpeta_filter form-control form-control-sm" id="colNumCarpeta_filter" type="text">
                </div>
                
                <div id="filter_NumFiscal" class="col-4">
                    <label for="">Numero de Fiscal: </label>
                    <input class="colNumFiscal_filter form-control form-control-sm" id="colNumFiscal_filter" type="text">
                </div>

                <div id="filter_Delito" class="col-4">
                    <label for="">Delito: </label>
                    <input class="colDelito_filter form-control form-control-sm" id="colDelito_filter" type="text">
                </div>    
            </div>

        <br>
    
        
        <table class="display compact table table-striped table-hover table-bordered" id="tabladirecciones">
            <thead>
                <tr>
                    <td>Número de Carpeta</td>
                    <td>Fecha De Inicio</td>
                    <td>UIPJ</td>
                    <td>Región</td>
                    <td>Numero de Fiscal</td>
                    <td>Delito</td>
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
         
        function filterColumnDelito () {
            $('#tabladirecciones').DataTable().column(5).search(
                $('#colDelito_filter').val()
            ).draw();
        }

        function filterColumnNumCarpeta () {
            $('#tabladirecciones').DataTable().column(0).search(
                $('#colNumCarpeta_filter').val()
            ).draw();
        }

        function filterColumnNumFiscal () {
            $('#tabladirecciones').DataTable().column(4).search(
                $('#colNumFiscal_filter').val()
            ).draw();
        }

        function filterColumnfecha () {
            $('#tabladirecciones').DataTable().column(1).search(
                $('#colfecha_filter').val()
            ).draw();
        }
        
        function filterColumnRegion () {
            $('#tabladirecciones').DataTable().column(3).search(
                $('#colRegion_filter').val()
            ).draw();
        }

        function filterColumnUnidad () {
            $('#tabladirecciones').DataTable().column(2).search(
                $('#colUnidad_filter').val()
            ).draw();
        }

        $(document).ready(function(){
            $('#tabladirecciones').DataTable({
                "processing": true,
                "serverSide": true,
                "pageLength": 10,
                "language": {
                         "url": '{!! asset('/datatables/latino.json') !!}'
                          } ,
                "ajax": "busquedaNCData",
                "columns": [
                    { data: 'numCarpeta' , name: 'numCarpeta'},
                    { data: 'fechaInicio' , name: 'fechaInicio'},
                    { data: 'unidad' , name: 'unidad'},
                    { data: 'region' , name: 'region'},
                    { data: 'numFiscal' , name: 'numFiscal'},
                    { data: 'delito' , name: 'delito'},
                    { data: null,  render: function ( data, type, row ) {
                        return "<a href='{{ url('detalle') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Ver</button>"  }  
                    }
                ]
            });

            $('input.global_filter').on( 'keyup click', function () {
                filterGlobal();
            } );
         
            $('input.colDelito_filter').on( 'keyup click', function () {
                filterColumnDelito();
            } );

            $('input.colNumCarpeta_filter').on( 'keyup click', function () {
                filterColumnNumCarpeta();
            } );

            $('input.colNumFiscal_filter').on( 'keyup click', function () {
                filterColumnNumFiscal();
            } );

            $('input.colfecha_filter').on( 'keyup click', function () {
                filterColumnfecha();
            } );

            $('input.colRegion_filter').on( 'keyup click', function () {
                filterColumnRegion();
            } );

            $('input.colUnidad_filter').on( 'keyup click', function () {
                filterColumnUnidad();
            } );

        });
    </script>

@endsection