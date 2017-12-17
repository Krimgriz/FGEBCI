@extends('index')
@section('content')

	<div class="fondo">
        <br>
        <center>
            <h4>BUSQUEDA POR PERSONAS DENUNCIANTES</h4>
        </center>
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

                    <div id="filter_sexo">
                        <label for="">Sexo: </label>
                        <input class="colSexo_filter form-control form-control-sm" id="colSexo_filter" type="text">
                    </div>



                </div>
                <div class="col-4">
                    <div id="filter_primerAp">
                        <label for="">Primer Apellido: </label>
                        <input class="colPrimerAp_filter form-control form-control-sm" id="colPrimerAp_filter" type="text">
                    </div>
                    
                    <div id="filter_region">
                        <label for="">Región: </label>
                        <input class="colRegion_filter form-control form-control-sm" id="colRegion_filter" type="text">
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

            
        <br>
            <table class="display compact table table-striped table-hover table-bordered" id="tablaagrabiado">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Primer Apellido</td>
                        <td>Segundo Apellido</td>
                        <td>Sexo</td>
                        <td>Número de Carpeta</td>
                        <td>Región</td>
                        <td>UIPJ</td>
                        <td>Acción</td>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>

    
    <script>

        function filterGlobal () {
            $('#tablaagrabiado').DataTable().search(
                $('#global_filter').val()
            ).draw();
        }
         
        function filterColumnNombre () {
            $('#tablaagrabiado').DataTable().column(0).search(
                $('#colNombre_filter').val()
            ).draw();
        }

        function filterColumnPrimerAp () {
            $('#tablaagrabiado').DataTable().column(1).search(
                $('#colPrimerAp_filter').val()
            ).draw();
        }

        function filterColumnSegundoAp () {
            $('#tablaagrabiado').DataTable().column(2).search(
                $('#colSegundoAp_filter').val()
            ).draw();
        }

        function filterColumnSexo () {
            $('#tablaagrabiado').DataTable().column(3).search(
                $('#colSexo_filter').val()
            ).draw();
        }
        
        function filterColumnRegion () {
            $('#tablaagrabiado').DataTable().column(5).search(
                $('#colRegion_filter').val()
            ).draw();
        }

        function filterColumnUnidad () {
            $('#tablaagrabiado').DataTable().column(6).search(
                $('#colUnidad_filter').val()
            ).draw();
        }

        $(document).ready(function(){
            $('#tablaagrabiado').DataTable({
                "processing": true,
                "serverSide": true,
                "pageLength": 10,
                "language": {
                         "url": '{!! asset('/datatables/latino.json') !!}'
                          } ,
                "ajax": "busquedaPAData",
                "columns": [
                    { data: 'nombres' , name: 'nombres'},
                    { data: 'primerAp' , name: 'primerAp'},
                    { data: 'segundoAp' , name: 'segundoAp'},
                    { data: 'sexo' , name: 'sexo'},
                    { data: 'numCarpeta' , name: 'numCarpeta'},
                    { data: 'region' , name: 'region'},
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

            $('input.colSexo_filter').on( 'keyup click', function () {
                filterColumnSexo();
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