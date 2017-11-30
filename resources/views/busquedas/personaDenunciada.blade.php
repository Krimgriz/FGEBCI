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

                <div class="col-4">
                    <div id="filter_nombre">
                        <label for="">Nombre: </label>
                        <input class="colNombre_filter form-control form-control-sm" id="colNombre_filter" type="text">
                    </div>

                    <div id="filter_alias">
                        <label for="">Alias: </label>
                        <input class="colAlias_filter form-control form-control-sm" id="colAlias_filter" type="text">
                    </div>



                </div>
                <div class="col-4">
                    <div id="filter_primerAp">
                        <label for="">Primer Apellido: </label>
                        <input class="colPrimerAp_filter form-control form-control-sm" id="colPrimerAp_filter" type="text">
                    </div>
                    
                    <div id="filter_delito">
                        <label for="">Delito: </label>
                        <input class="colDelito_filter form-control form-control-sm" id="colDelito_filter" type="text">
                    </div>
                </div>

                <div class="col-4">
                    <div id="filter_segundoAp">
                        <label for="">Segundo Apellido: </label>
                        <input class="colSegundoAp_filter form-control form-control-sm" id="colSegundoAp_filter" type="text">
                    </div>

                    <div id="filter_unidad">
                        <label for="">UIPJ: </label>
                        <input class="colUnidad_filter form-control form-control-sm" id="colUnidad_filter" type="text">
                    </div>
                </div>

                
            </div>
        </div>
        <br>
        <table class="table table-striped table-hover table-bordered" id="tabladirecciones">
            <thead>
                <tr>
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

        function filterGlobal () {
            $('#tabladirecciones').DataTable().search(
                $('#global_filter').val()
            ).draw();
        }
         
        function filterColumnNombre () {
            $('#tabladirecciones').DataTable().column(0).search(
                $('#colNombre_filter').val()
            ).draw();
        }

        function filterColumnPrimerAp () {
            $('#tabladirecciones').DataTable().column(1).search(
                $('#colPrimerAp_filter').val()
            ).draw();
        }

        function filterColumnSegundoAp () {
            $('#tabladirecciones').DataTable().column(2).search(
                $('#colSegundoAp_filter').val()
            ).draw();
        }

        function filterColumnDelito () {
            $('#tabladirecciones').DataTable().column(5).search(
                $('#colDelito_filter').val()
            ).draw();
        }

        function filterColumnAlias () {
            $('#tabladirecciones').DataTable().column(3).search(
                $('#colAlias_filter').val()
            ).draw();
        }

        function filterColumnUnidad () {
            $('#tabladirecciones').DataTable().column(6).search(
                $('#colUnidad_filter').val()
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
                "ajax": "busquedaPIData",
                "columns": [
                    { data: 'nombres' , name: 'nombres'},
                    { data: 'primerAp' , name: 'primerAp'},
                    { data: 'segundoAp' , name: 'segundoAp'},
                    { data: 'alias' , name: 'alias'},
                    { data: 'numCarpeta' , name: 'numCarpeta'},
                    { data: 'delito' , name: 'delito'},
                    { data: 'unidad' , name: 'unidad'},
                    { data: null,  render: function ( data, type, row ) {
                        return "<a href='{{ url('detalle') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Ver</button>"  }  
                    }
                ]
            });


            $('input.global_filter').on( 'keyup click', function () {
                filterGlobal();
            } );
         
            $('input.colNombre_filter').on( 'keyup click', function () {
                filterColumnNombre();
            } );

            $('input.colPrimerAp_filter').on( 'keyup click', function () {
                filterColumnPrimerAp();
            } );

            $('input.colSegundoAp_filter').on( 'keyup click', function () {
                filterColumnSegundoAp();
            } );

            $('input.colDelito_filter').on( 'keyup click', function () {
                filterColumnDelito();
            } );

            $('input.colAlias_filter').on( 'keyup click', function () {
                filterColumnAlias();
            } );

            $('input.colUnidad_filter').on( 'keyup click', function () {
                filterColumnUnidad();
            } );

        });
    </script>

@endsection