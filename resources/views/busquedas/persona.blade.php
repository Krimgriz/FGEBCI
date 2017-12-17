@extends('index')
@section('content')
	<div class="fondo">

        <br>
        <center>
            <h4>BUSQUEDA POR PERSONAS</h4>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a style="width: 100%" class="btn btn-secondary" href="{{url('busqueda_personaDenunciada')}}">Pesonas Denunciadas</a>
                </div>
                <div class="col-sm-6">
                    <a style="width: 100%" class="btn btn-secondary" href="{{url('busqueda_personaDenunciante')}}">Pesonas Denunciantes</a>
                </div>
            </div>
        </div>
        
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
                        <input class="columnNombre_filter form-control form-control-sm" id="colNombre_filter" type="text">
                    </div>

                    <div id="filter_municipio">
                        <label for="">Municipio: </label>
                        <input class="columnMunicipio_filter form-control form-control-sm" id="colMunicipio_filter" type="text">
                    </div>



                </div>
                <div class="col-4">
                    <div id="filter_primerAp">
                        <label for="">Primer Apellido: </label>
                        <input class="columnPrimerAp_filter form-control form-control-sm" id="colPrimerAp_filter" type="text">
                    </div>
                    
                    <div id="filter_sexo">
                        <label for="">Sexo: </label>
                        <input class="columnSexo_filter form-control form-control-sm" id="colSexo_filter" type="text">
                    </div>
                </div>

                <div class="col-4">
                    <div id="filter_segundoAp">
                        <label for="">Segundo Apellido: </label>
                        <input class="columnSegundoAp_filter form-control form-control-sm" id="colSegundoAp_filter" type="text">
                    </div>

                    <div id="filter_calidadJuridica">
                        <label for="">Calidad Juridica: </label>
                        <input class="columnCalidadJuridica_filter form-control form-control-sm" id="colCalidadJuridica_filter" type="text">
                    </div>
                </div>

                
            </div>
            


        <br>
        
            
            <table class="display compact table table-striped table-hover table-bordered" id="tablapersonas">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Primer Apellido</td>
                        <td>Segundo Apellido</td>
                        <td>Sexo</td>
                        <td>Municipio</td>
                        <td>Calidad Juridica</td>
                        <td>Acción</td>
                    </tr>
                </thead>
                
            </table>
        
        </div>
    </div>

    
    <script>

        function filterGlobal () {
            $('#tablapersonas').DataTable().search(
                $('#global_filter').val()
            ).draw();
        }
         
        function filterColumnNombre () {
            $('#tablapersonas').DataTable().column(0).search(
                $('#colNombre_filter').val()
            ).draw();
        }

        function filterColumnPrimerAp () {
            $('#tablapersonas').DataTable().column(1).search(
                $('#colPrimerAp_filter').val()
            ).draw();
        }

        function filterColumnSegundoAp () {
            $('#tablapersonas').DataTable().column(2).search(
                $('#colSegundoAp_filter').val()
            ).draw();
        }

        function filterColumnSexo () {
            $('#tablapersonas').DataTable().column(3).search(
                $('#colSexo_filter').val()
            ).draw();
        }

        function filterColumnMunicipio () {
            $('#tablapersonas').DataTable().column(4).search(
                $('#colMunicipio_filter').val()
            ).draw();
        }

        function filterColumnCalidadJuridica () {
            $('#tablapersonas').DataTable().column(5).search(
                $('#colCalidadJuridica_filter').val()
            ).draw();
        }

        $(document).ready(function(){
            $('#tablapersonas').DataTable({
                "processing": true,
                "serverSide": true,
                "pageLength": 10,
                "language": {
                         "url": '{!! asset('/datatables/latino.json') !!}'
                          } ,
                "ajax": "busquedaPData",
                "columns": [
                    { data: 'nombres' , name: 'nombres'},
                    { data: 'primerAp' , name: 'primerAp'},
                    { data: 'segundoAp' , name: 'segundoAp'},
                    { data: 'sexo' , name: 'sexo'},
                    { data: 'municipio' , name: 'municipio'},
                    { data: 'calidadJuridica' , name: 'calidadJuridica'},
                    { data: null,  render: function ( data, type, row ) {
                        return "<a href='{{ url('detalle') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Ver</button>"  }  
                    }
                ]
            });

            $('input.global_filter').on( 'keyup click', function () {
                filterGlobal();
            } );

            $('input.columnNombre_filter').on( 'keyup click', function () {
                filterColumnNombre();
            } );

            $('input.columnPrimerAp_filter').on( 'keyup click', function () {
                filterColumnPrimerAp();
            } );

            $('input.columnSegundoAp_filter').on( 'keyup click', function () {
                filterColumnSegundoAp();
            } );

            $('input.columnSexo_filter').on( 'keyup click', function () {
                filterColumnSexo();
            } );

            $('input.columnMunicipio_filter').on( 'keyup click', function () {
                filterColumnMunicipio();
            } );

            $('input.columnCalidadJuridica_filter').on( 'keyup click', function () {
                filterColumnCalidadJuridica();
            } );

        });
    </script>

@endsection