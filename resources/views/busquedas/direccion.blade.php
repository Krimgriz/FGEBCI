@extends('index')
@section('content')
	<br>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<div class="fondo">
        <br>
        <table class="table table-striped table-hover table-bordered" id="tabladirecciones">
            <thead>
                <tr>
                    <th>Municipio</th>
                    <th>Localidad</th>
                    <th>Colonia</th>
                    <th>Código Postal</th>
                    <th>Número de Carpeta</th>
                    <th>Delito</th>
                    <th>UIPJ</th>
                    <th>Acción</th>
                </tr>
            </thead>
            
        </table>
    </div>
@endsection
{{--
    --}}
    <script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        function activar_tabla_empresas() {
    $('#tabla-empresas').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 20,
        language: {
                 "url": '{!! asset('/plugins/datatables/latino.json') !!}'
                  } ,
        ajax: '{!! url('listado_empresas_data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nom_empresa', name: 'nom_empresa' },
            { data: 'encargado', name: 'encargado' },
            { data: 'telefono', name: 'telefono' },
            { data: 'email', name: 'email' },
            { data: 'ciudad', name: 'ciudad' },
            { data: 'direccion', name: 'direccion' },
            { data: null,  render: function ( data, type, row ) {
                return "<a href='{{ url('form_editar_contacto/') }}/"+ data.id +"' class='btn btn-xs btn-primary' >Editar</button>"  }  
            }
        ]
    });
}
activar_tabla_empresas();
    </script>

