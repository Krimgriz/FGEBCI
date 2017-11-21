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
            <tbody>
                @foreach($direcciones as $direccion )
                <tr>
                    <td>{{ $direccion->municipio }}</td>
                    <td>{{ $direccion->localidad }}</td>
                    <td>{{ $direccion->colonia }}</td>
                    <td>{{ $direccion->codigoPostal }}</td>
                    <td>{{ $direccion->numCarpeta }}</td>
                    <td>{{ $direccion->delito }}</td>
                    <td>{{ $direccion->unidad }}</td>
                    <td>{{ $direccion->accion }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tabladirecciones').DataTable();
        });
    </script>


@stop