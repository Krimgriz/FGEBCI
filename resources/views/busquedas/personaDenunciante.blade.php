@extends('index')
@section('content')
	<br>
    
	<div class="fondo">
        <br>
        <div class="container">
            
            <table style="width: 80%; margin: 0 auto 0 auto;"  border="0">
                
                <tbody>
                    <tr id="filter_global">
                        <td style="width: 15%; text-align: right;">Busqueda Global</td>
                        <td align="center"><input class="global_filter form-control" id="global_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col1" data-column="1">
                        <td style="width: 15%; text-align: right;">Nombre</td>
                        <td align="center"><input class="column_filter form-control" id="col1_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col2" data-column="2">
                        <td style="width: 15%; text-align: right;">Primer Apellido</td>
                        <td align="center"><input class="column_filter form-control" id="col2_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col3" data-column="3">
                        <td style="width: 15%; text-align: right;">Segundo Apellido</td>
                        <td align="center"><input class="column_filter form-control" id="col3_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col5" data-column="5">
                        <td style="width: 15%; text-align: right;">Regional</td>
                        <td align="center"><input class="column_filter form-control" id="col5_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col6" data-column="6">
                        <td style="width: 15%; text-align: right;">UIPJ</td>
                        <td align="center"><input class="column_filter form-control" id="col6_filter" type="text"></td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <table class="table table-striped table-hover table-bordered" id="tablaagrabiado">
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

        function filterGlobal () {
            $('#tablaagrabiado').DataTable().search(
                $('#global_filter').val()
            ).draw();
        }
         
        function filterColumn ( i ) {
            $('#tablaagrabiado').DataTable().column( i ).search(
                $('#col'+i+'_filter').val()
            ).draw();
        }

        $(document).ready(function(){
            $('#tablaagrabiado').DataTable({
                "processing": true,
                "serverSide": true,
                "pageLength": 20,
                "language": {
                         "url": '{!! asset('/datatables/latino.json') !!}'
                          } ,
                "ajax": "busquedaPAData",
                "columns": [
                    { data: 'id' , name: 'id'},
                    { data: 'nombres' , name: 'nombres'},
                    { data: 'primerAp' , name: 'primerAp'},
                    { data: 'segundoAp' , name: 'segundoAp'},
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
         
            $('input.column_filter').on( 'keyup click', function () {
                filterColumn( $(this).parents('tr').attr('data-column') );
            } );
        });
    </script>

@endsection