@extends('index')
@section('content')
<br>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#involucrado" role="tab" aria-controls="involucrado" aria-selected="true">Involucrados</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#denuciado" role="tab" aria-controls="denuciado" aria-selected="false">Denunciados</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#denunciante" role="tab" aria-controls="denunciante" aria-selected="false">Denunciantes</a>
    </li>
</ul>

<div class="tab-content" id="myTabContent" >
    <div class="tab-pane fade show active" id="involucrado" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <td>Nombre</td>
                <td>Primer Apellido</td>
                <td>Segundo Apellido</td>
                <td>Calidad Jurídica</td>
                <td>Número de Carpeta</td>
                <td>Delito</td>
                <td>Regional</td>
                <td>UIPJ</td>
                <td>Acción</td>
            </thead>
            <tbody></tbody>
        </table>

    </div>
    <div class="tab-pane fade" id="denuciado"  role="tabpanel" aria-labelledby="profile-tab">
        <br>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <td>Nombre</td>
                <td>Primer Apellido</td>
                <td>Segundo Apellido</td>
                <td>Calidad Jurídica</td>
                <td>Alias</td>
                <td>Número de Carpeta</td>
                <td>Delito</td>
                <td>UIPJ</td>
                <td>Acción</td>
            </thead>
            <tbody></tbody>
        </table>

    </div>
    <div class="tab-pane fade" id="denunciante" role="tabpanel" aria-labelledby="contact-tab">
        <br>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <td>Nombre</td>
                <td>Primer Apellido</td>
                <td>Segundo Apellido</td>
                <td>Calidad Jurídica</td>
                <td>Número de Carpeta</td>
                <td>Delito</td>
                <td>Regional</td>
                <td>UIPJ</td>
                <td>Acción</td>
            </thead>
            <tbody></tbody>
        </table>

    </div>
</div>
@stop