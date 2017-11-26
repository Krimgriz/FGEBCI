@extends('index')
@section('content')
	<br>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#vehiculos" role="tab" aria-controls="vehiculos" aria-selected="true">Vehiculos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vericulosinvolucrados" role="tab" aria-controls="vericulosinvolucrados" aria-selected="false">Vehiculos Involucrados</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#vehiculosrobados" role="tab" aria-controls="vehiculosrobados" aria-selected="false">Vehiculos Robados</a>
    </li>
</ul>

<div class="tab-content" id="myTabContent" >
    <div class="tab-pane fade show active" id="vehiculos" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <td>Número de Carpeta</td>
                <td>UIPJ</td>
                <td>Placas</td>
                <td>Modelo</td>
                <td>Marca</td>
                <td>Número de Serie</td>
                <td>Número de Motor</td>
                <td>Estado</td>
                <td>Acción</td>
            </thead>
            <tbody></tbody>
        </table>

    </div>
    <div class="tab-pane fade" id="vericulosinvolucrados"  role="tabpanel" aria-labelledby="profile-tab">
        <br>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <td>Número de Carpeta</td>
                <td>UIPJ</td>
                <td>Placas</td>
                <td>Modelo</td>
                <td>Marca</td>
                <td>Número de Serie</td>
                <td>Número de Motor</td>
                <td>Acción</td>
            </thead>
            <tbody></tbody>
        </table>

    </div>
    <div class="tab-pane fade" id="vehiculosrobados" role="tabpanel" aria-labelledby="contact-tab">
        <br>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <td>Número de Carpeta</td>
                <td>UIPJ</td>
                <td>Placas</td>
                <td>Modelo</td>
                <td>Marca</td>
                <td>Número de Serie</td>
                <td>Número de Motor</td>
                <td>Fecha de Reporte</td>
                <td>Acción</td>
            </thead>
            <tbody></tbody>
        </table>

    </div>
</div>
@stop