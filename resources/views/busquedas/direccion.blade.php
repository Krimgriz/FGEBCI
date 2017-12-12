@extends('index')
@section('content')
    
	<div class="fondo">
        <br>
        <center>
            <h4>BUSQUEDA POR DIRECCIONES</h4>
        </center>
        <div class="container">
            

            <div class="row">
                <div class="col-12" id="filter_global">
                    <label for="">Busqueda Global</label>
                    <input class="global_filter form-control form-control-sm" id="global_filter" type="text">
                </div>

                <div class="col-4">
                    <div id="filter_Municipio">
                        <label for="">Municipio: </label>
                        <input class="colMunicipio_filter form-control form-control-sm" id="colMunicipio_filter" type="text">
                    </div>
                    <div id="filter_Codigo">
                        <label for="">Codigo Postal: </label>
                        <input class="colCodigo_filter form-control form-control-sm" id="colCodigo_filter" type="text">
                    </div>

                </div>
                <div class="col-4">
                    <div id="filter_Localidad">
                        <label for="">Localidad: </label>
                        <input class="colLocalidad_filter form-control form-control-sm" id="colLocalidad_filter" type="text">
                    </div>
                    
                    <div id="filter_Calle">
                        <label for="">Calle: </label>
                        <input class="colCalle_filter form-control form-control-sm" id="colCalle_filter" type="text">
                    </div>
                </div>

                <div class="col-4">
                    <div id="filter_Colonia">
                        <label for="">Colonia: </label>
                        <input class="colColonia_filter form-control form-control-sm" id="colColonia_filter" type="text">
                    </div>

                    <div id="filter_Delito">
                        <label for="">Delito: </label>
                        <input class="colDelito_filter form-control form-control-sm" id="colDelito_filter" type="text">
                    </div>
                </div>

                
            </div>
            
        <br>
        <table class="table table-sm table-striped table-hover table-bordered" id="tabladirecciones">
            <thead>
                <tr>
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

    </div>

    
    <script>
        /*prueba de funciones para buscador de data table
        */
        function filterGlobal () {
            $('#tabladirecciones').DataTable().search(
                $('#global_filter').val()
            ).draw();
        }

        function filterMunicipio () {
            $('#tabladirecciones').DataTable().column(0).search(
                $('#colMunicipio_filter').val()
            ).draw();
        }

        function filterLocalidad () {
            $('#tabladirecciones').DataTable().column(1).search(
                $('#colLocalidad_filter').val()
            ).draw();
        }
        function filterColonia () {
            $('#tabladirecciones').DataTable().column(2).search(
                $('#colColonia_filter').val()
            ).draw();
        }
        function filterCodigo () {
            $('#tabladirecciones').DataTable().column(3).search(
                $('#colCodigo_filter').val()
            ).draw();
        }

        function filterCalle () {
            $('#tabladirecciones').DataTable().column(4).search(
                $('#colCalle_filter').val()
            ).draw();
        }

        function filterDelito () {
            $('#tabladirecciones').DataTable().column(6).search(
                $('#colDelito_filter').val()
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
                "ajax": "busquedaDData",
                "columns": [
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
/*pruebas de buscador
*/
            $('input.global_filter').on( 'keyup click', function () {
                filterGlobal();
            } );


            $('input.colMunicipio_filter').on( 'keyup click', function () {
                filterMunicipio();
            } );
            $('input.colCodigo_filter').on( 'keyup click', function () {
                filterCodigo();
            } );
            $('input.colLocalidad_filter').on( 'keyup click', function () {
                filterLocalidad();
            } );
            $('input.colCalle_filter').on( 'keyup click', function () {
                filterCalle();
            } );
            $('input.colColonia_filter').on( 'keyup click', function () {
                filterColonia();
            } );
            $('input.colDelito_filter').on( 'keyup click', function () {
                filterDelito();
            } );

            /*fin pruebas de buscador*/


        });


/* pruebas buscador */
         
















    </script>

@endsection