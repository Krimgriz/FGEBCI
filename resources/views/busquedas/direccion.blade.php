@extends('index')
@section('content')
    
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
                        <td style="width: 15%; text-align: right;">Municipio</td>
                        <td align="center"><input class="column_filter form-control" id="col1_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col2" data-column="2">
                        <td style="width: 15%; text-align: right;">Localidad</td>
                        <td align="center"><input class="column_filter form-control" id="col2_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col3" data-column="3">
                        <td style="width: 15%; text-align: right;">Colonia</td>
                        <td align="center"><input class="column_filter form-control" id="col3_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col4" data-column="4">
                        <td style="width: 15%; text-align: right;">Codigo Postal</td>
                        <td align="center"><input class="column_filter form-control" id="col4_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col5" data-column="5">
                        <td style="width: 15%; text-align: right;">Calle</td>
                        <td align="center"><input class="column_filter form-control" id="col5_filter" type="text"></td>
                        
                    </tr>
                    <tr id="filter_col7" data-column="7">
                        <td style="width: 15%; text-align: right;">Delito</td>
                        <td align="center"><input class="column_filter form-control" id="col7_filter" type="text"></td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <table class="table table-striped table-hover table-bordered" id="tabladirecciones">
            <thead>
                <tr>
                    <th>ID</th>
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

    
    <script>
        /*prueba de funciones para buscador de data table
        */
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
                "ajax": "busquedaDData",
                "columns": [
                    { data: 'id' , name: 'id'},
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
         
            $('input.column_filter').on( 'keyup click', function () {
                filterColumn( $(this).parents('tr').attr('data-column') );
            } );

            /*fin pruebas de buscador*/


        });


/* pruebas buscador */
         
















    </script>

@endsection