@extends('index')
@section('content')
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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table style=" margin: 0 auto 0 auto;"  border="0">
                        
                        <tbody>
                            <tr id="filter_global">
                                <td style="width: 20%; text-align: right;">Busqueda Global: </td>
                                <td align="center"><input class="global_filter form-control form-control-sm" id="global_filter" type="text"></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="col-6">
                    <table   border="0">
                        <tbody>
                            <tr id="filter_col1" data-column="1">
                                <td style="width: 20%; text-align: right;">Nombre: </td>
                                <td align="center"><input class="column_filter form-control form-control-sm" id="col1_filter" type="text"></td>
                                
                            </tr>
                            <tr id="filter_col2" data-column="2">
                                <td style="width: 20%; text-align: right;">Primer Apellido: </td>
                                <td align="center"><input class="column_filter form-control form-control-sm" id="col2_filter" type="text"></td>
                                
                            </tr>
                            <tr id="filter_col3" data-column="3">
                                <td style="width: 15%; text-align: right;">Segundo Apellido: </td>
                                <td align="center"><input class="column_filter form-control form-control-sm" id="col3_filter" type="text"></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="col-6">
                    <table   border="0">
                        <tbody>
                            <tr id="filter_col4" data-column="4">
                                <td style="width: 15%; text-align: right;">Sexo: </td>
                                <td align="center"><input class="column_filter form-control form-control-sm" id="col4_filter" type="text"></td>
                                
                            </tr>
                            <tr id="filter_col5" data-column="5">
                                <td style="width: 15%; text-align: right;">Municipio: </td>
                                <td align="center"><input class="column_filter form-control form-control-sm" id="col5_filter" type="text"></td>
                                
                            </tr>
                            <tr id="filter_col6" data-column="6">
                                <td style="width: 15%; text-align: right;">Calidad Juridica: </td>
                                <td align="center"><input class="column_filter form-control form-control-sm" id="col6_filter" type="text"></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    
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
                    <td>Sexo</td>
                    <td>Municipio</td>
                    <td>Calidad Juridica</td>
                    <td>Acción</td>
                </tr>
            </thead>
            
        </table>
    </div>

    
    <script>

        function filterGlobal () {
            $('#tablapersonas').DataTable().search(
                $('#global_filter').val()
            ).draw();
        }
         
        function filterColumn ( i ) {
            $('#tablapersonas').DataTable().column( i ).search(
                $('#col'+i+'_filter').val()
            ).draw();
        }

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
                    { data: 'nombres' , name: 'nombres'},
                    { data: 'primerAp' , name: 'primerAp'},
                    { data: 'segundoAp' , name: 'segundoAp'},
                    { data: 'sexo' , name: 'sexo'},
                    { data: 'municipio' , name: 'municipio'},
                    { data: 'unidad' , name: 'unidad'},
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