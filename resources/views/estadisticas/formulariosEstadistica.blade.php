@extends('index')



@section('content')


<div class="fondo ">
<br> 

    <div id="accordion" role="tablist" aria-multiselectable="true">
        {{--Carpetas Iniciadas--}}
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0" style="text-align: center;">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Carpetas iniciadas
                    </a>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block fondo">
                    {{Form::open(['route'=>'post.iniciadas','method' => 'POST'])}}
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">

                                {{ Form::label('year', 'Año') }}
                                {{ Form::select('year', [
                                    2016 => '2016', 
                                    2017 => '2017',
                                    2018 => '2018',
                                    2019 => '2019',
                                    2020 => '2020',
                                    2021 => '2021',
                                    2022 => '2022',
                                    2023 => '2023'], 2017, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-sm-4">

                                {{ Form::label('tipo', 'Carpetas de Investigación') }}
                                {{ Form::select('tipo', [
                                    'iniciadas' => 'Iniciadas', 
                                    'conDetenido' => 'Iniciadas Con Detenido',
                                    'sinDetenido' => 'Iniciadas Sin Detenido'], 'iniciadas', ['class' => 'form-control']
                                )}}
                            </div>

                            <div class="col-sm-4"><br> 
                                {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                            </div>
                        </div>
                    </div>  
                    {!! Form::close() !!}
                    <br>
                </div>
            </div>
        </div>
        {{--Edad--}}
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0" style="text-align: center;">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Edad
                    </a>
                </h5>
            </div>
  
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-block fondo">

                    {{ Form::open(['route'=>'post.edad', 'method' => 'POST']) }}
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-4">

                                    {{ Form::label('yearedad', 'Año') }}
                                    {{ Form::select('yearedad', [
                                        2016 => '2016', 
                                        2017 => '2017',
                                        2018 => '2018',
                                        2019 => '2019',
                                        2020 => '2020',
                                        2021 => '2021',
                                        2022 => '2022',
                                        2023 => '2023'], 2017, ['class' => 'form-control']
                                        )}}
                                </div>
                                <div class="col-4">
                                    {{ Form::label('edad', 'Rango de edad') }}
                                    {{ Form::select('edad', [
                                        'menores12' => 'Menores de 12', 
                                        '12a17' => '12 - 17',
                                        '18a25' => '18 - 25',
                                        '26a30' => '26 - 30',
                                        '31a35' => '31 - 35',
                                        '36a40' => '36 - 40',
                                        '41a45' => '41 - 45',
                                        '46a50' => '46 - 50',
                                        '51a55' => '51 - 55',
                                        '56a60' => '56 - 60',
                                        'mayores60' => 'Mayores de 60'], '18a25', ['class' => 'form-control']
                                        )}}
                                    
                                </div>

                                <div class="col-4">
                                    {{ Form::label('tipoedad', 'Calidad Juridica') }}
                                    {{ Form::select('tipoedad', [
                                        'todos' => 'Indistinto',
                                        'denunciantes' => 'Denunciantes', 
                                        'denunciados' => 'Denunciados'], null, ['class' => 'form-control']
                                        )}}
                                    
                                </div>

                                <div class="col-12"><br> 
                                    {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <br>
                </div>
            </div>
        </div>
        {{--Empresas--}}
        <div class="card">
            <div class="card-header" role="tab" id="heading9">
                <h5 class="mb-0" style="text-align: center;">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                    Empresas
                    </a>
                </h5>
            </div>
  
            <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9">
                <div class="card-block fondo">
                    {{Form::open(['route'=>'post.empresas','method' => 'POST'])}}
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">

                                {{ Form::label('yearEmpresa', 'Año') }}
                                {{ Form::select('yearEmpresa', [
                                    2016 => '2016', 
                                    2017 => '2017',
                                    2018 => '2018',
                                    2019 => '2019',
                                    2020 => '2020',
                                    2021 => '2021',
                                    2022 => '2022',
                                    2023 => '2023'], 2017, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-4">
                                    {{ Form::label('tipoempresa', 'Calidad Juridica') }}
                                    {{ Form::select('tipoempresa', [
                                        'todos' => 'Indistinto',
                                        'denunciantes' => 'Denunciantes', 
                                        'denunciados' => 'Denunciados'], null, ['class' => 'form-control']
                                        )}}
                                    
                                </div>

                            <div class="col-sm-4"><br> 
                                {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                            </div>
                        </div>
                    </div>  
                    {!! Form::close() !!}
                    <br>
                </div>
            </div>
        </div>
        {{--Etnia--}}
        <div class="card">
            <div class="card-header" role="tab" id="heading3">
                <h5 class="mb-0" style="text-align: center;">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    Etnia
                    </a>
                </h5>
            </div>
  
            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="card-block fondo">
                    {{Form::open(['route'=>'post.etnia','method' => 'POST'])}}
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">

                                {{ Form::label('yearetnia', 'Año') }}
                                {{ Form::select('yearetnia', [
                                    2016 => '2016', 
                                    2017 => '2017',
                                    2018 => '2018',
                                    2019 => '2019',
                                    2020 => '2020',
                                    2021 => '2021',
                                    2022 => '2022',
                                    2023 => '2023'], 2017, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-4">
                                {{ Form::label('tipoetnia', 'Calidad Juridica') }}
                                {{ Form::select('tipoetnia', [
                                    'todos' => 'Indistinto',
                                    'denunciantes' => 'Denunciantes', 
                                    'denunciados' => 'Denunciados'], '18a25', ['class' => 'form-control']
                                    )}}
                                
                            </div>

                            <div class="col-4">
                                {{ Form::label('etnia', 'Etnia') }}
                                {{ Form::select('etnia', $etnia , null, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-12"><br> 
                                {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                            </div>
                        </div>
                    </div>  
                    {!! Form::close() !!}
                    <br>

                </div>
            </div>
        </div>
        {{--Delito--}}
        <div class="card">
            <div class="card-header" role="tab" id="heading2">
                <h5 class="mb-0" style="text-align: center;">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Delito
                    </a>
                </h5>
            </div>
  
            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="card-block fondo">
                    {{Form::open(['route'=>'post.delito','method' => 'POST'])}}
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">

                                {{ Form::label('yeardelito', 'Año') }}
                                {{ Form::select('yeardelito', [
                                    2016 => '2016', 
                                    2017 => '2017',
                                    2018 => '2018',
                                    2019 => '2019',
                                    2020 => '2020',
                                    2021 => '2021',
                                    2022 => '2022',
                                    2023 => '2023'], 2017, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-4">
                                {{ Form::label('delito', 'Delito') }}
                                {{ Form::select('delito', $delitos , null, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-sm-4"><br> 
                                {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                            </div>
                        </div>
                    </div>  
                    {!! Form::close() !!}
                    <br>
                </div>
            </div>
        </div>
        {{--Municipio--}}
        <div class="card">
            <div class="card-header" role="tab" id="heading4">
                <h5 class="mb-0" style="text-align: center;">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    Municipio
                    </a>
                </h5>
            </div>
  
            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="card-block fondo">
                    {{Form::open(['route'=>'post.municipio','method' => 'POST'])}}
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">

                                {{ Form::label('yearmunicipio', 'Año') }}
                                {{ Form::select('yearmunicipio', [
                                    2016 => '2016', 
                                    2017 => '2017',
                                    2018 => '2018',
                                    2019 => '2019',
                                    2020 => '2020',
                                    2021 => '2021',
                                    2022 => '2022',
                                    2023 => '2023'], 2017, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-4">
                                {{ Form::label('municipio', 'Municipio') }}
                                {{ Form::select('municipio', $municipio , null, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-sm-4"><br> 
                                {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                            </div>
                        </div>
                    </div>  
                    {!! Form::close() !!}
                    <br>
                </div>
            </div>
        </div>
        {{--Region--}}
        <div class="card">
            <div class="card-header" role="tab" id="heading6">
                <h5 class="mb-0" style="text-align: center;">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    Region
                    </a>
                </h5>
            </div>
  
            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
                <div class="card-block fondo">
                    {{Form::open(['route'=>'post.region','method' => 'POST'])}}
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">

                                {{ Form::label('yearregion', 'Año') }}
                                {{ Form::select('yearregion', [
                                    2016 => '2016', 
                                    2017 => '2017',
                                    2018 => '2018',
                                    2019 => '2019',
                                    2020 => '2020',
                                    2021 => '2021',
                                    2022 => '2022',
                                    2023 => '2023'], 2017, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-4">
                                {{ Form::label('region', 'Región') }}
                                {{ Form::select('region', [
                                    'Tantoyucan' => 'Tantoyucan', 
                                    'Poza Rica' => 'Poza Rica',
                                    'Xalapa' => 'Xalapa',
                                    'Cordoba' => 'Cordoba',
                                    'Veracruz' => 'Veracruz',
                                    'Cosamaloapan' => 'Cosamaloapan',
                                    'Coatzacoalcos' => 'Coatzacoalcos'] , null, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-sm-4"><br> 
                                {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                            </div>
                        </div>
                    </div>  
                    {!! Form::close() !!}
                    <br>
                </div>
            </div>
        </div>
        {{--Unidad--}}
        <div class="card">
            <div class="card-header" role="tab" id="heading5">
                <h5 class="mb-0" style="text-align: center;">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    Unidad
                    </a>
                </h5>
            </div>
  
            <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
                <div class="card-block fondo">
                    {{Form::open(['route'=>'post.unidad','method' => 'POST'])}}
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">

                                {{ Form::label('yearunidad', 'Año') }}
                                {{ Form::select('yearunidad', [
                                    2016 => '2016', 
                                    2017 => '2017',
                                    2018 => '2018',
                                    2019 => '2019',
                                    2020 => '2020',
                                    2021 => '2021',
                                    2022 => '2022',
                                    2023 => '2023'], 2017, ['class' => 'form-control']
                                    )}}
                            </div>
                            

                            <div class="col-4">
                                {{ Form::label('region2', 'Región') }}
                                {{ Form::select('region2', [
                                    'Tantoyuca' => 'Tantoyuca', 
                                    'Poza Rica' => 'Poza Rica',
                                    'Xalapa' => 'Xalapa',
                                    'Cordoba' => 'Cordoba',
                                    'Veracruz' => 'Veracruz',
                                    'Cosamaloapan' => 'Cosamaloapan',
                                    'Coatzacoalcos' => 'Coatzacoalcos'] , null, ['class' => 'form-control' , 'placeholder'=>'Seleccione Región']
                                    )}}
                            </div>


                            <div class="col-4">
                                {{ Form::label('unidad', 'Unidad') }}
                                {{ Form::select('unidad', [] , null, ['class' => 'form-control' , 'placeholder'=>'Seleccione Región']
                                    )}}
                            </div>

                            <div class="col-sm-12"><br> 
                                {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                            </div>
                        </div>
                    </div>  
                    {!! Form::close() !!}
                    <br>
                </div>
            </div>
        </div>
        {{--Sexo--}}
        <div class="card">
            <div class="card-header" role="tab" id="heading7">
                <h5 class="mb-0" style="text-align: center;">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    Sexo
                    </a>
                </h5>
            </div>
  
            <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7">
                <div class="card-block fondo">
                    {{Form::open(['route'=>'post.sexo','method' => 'POST'])}}
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">

                                {{ Form::label('yearsexo', 'Año') }}
                                {{ Form::select('yearsexo', [
                                    2016 => '2016', 
                                    2017 => '2017',
                                    2018 => '2018',
                                    2019 => '2019',
                                    2020 => '2020',
                                    2021 => '2021',
                                    2022 => '2022',
                                    2023 => '2023'], 2017, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-4">
                                {{ Form::label('tiposexo', 'Sexo') }}
                                {{ Form::select('tiposexo', [
                                    'todos' => 'Indistinto', 
                                    'hombre' => 'Hombre',
                                    'mujer' => 'Mujer'] , null, ['class' => 'form-control']
                                    )}}
                            </div>

                            <div class="col-sm-4"><br> 
                                {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                            </div>
                        </div>
                    </div>  
                    {!! Form::close() !!}
                    <br>
                </div>
            </div>
        </div>
        {{--Colonia--}}
        <div class="card">
            <div class="card-header" role="tab" id="heading8">
                <h5 class="mb-0" style="text-align: center;">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                    Colonia
                    </a>
                </h5>
            </div>
  
            <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8">
                <div class="card-block fondo">
                    {{ Form::open(['route'=>'post.colonia','method' => 'POST']) }}
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-4">
                                {{ Form::label('yearcolonia', 'Año') }}
                                {{ Form::select('yearcolonia', [
                                        2016 => '2016', 
                                        2017 => '2017',
                                        2018 => '2018',
                                        2019 => '2019',
                                        2020 => '2020',
                                        2021 => '2021',
                                        2022 => '2022',
                                        2023 => '2023'], 2017, ['class' => 'form-control']
                                        )}}
                            </div>
                                
                            <div class="col-sm-4">
                                {{ Form::label('municipio2', 'Municipio') }}
                                {{ Form::select('municipio2', $municipio, null ,['class' => 'form-control', 'placeholder'=>'Seleccione Municipio']
                                )}}
                            </div>

                            <div class="col-sm-4">
                                {{ Form::label('colonia', 'Colonia') }}
                                {{ Form::select('colonia', [] , null ,['class' => 'form-control', 'placeholder'=>'Seleccione una colonia']
                                )}}
                            </div>

                            <div class="col-sm-12"><br> 
                                {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>





</div>

<script src="{{ url('js/selectsEstadisticas.js') }}" type="text/javascript"></script>
<script type="text/javascript">
/*

$("#municipio2").change(function(event){
    $.get("filtroColonias/"+event.target.value+"", function(response, municipio){
        $("#colonia").empty();
        $("#colonia").append("<option value=''>Seleccione una colonia</option>");
        for(i=0; i<response.length; i++){
            $("#colonia").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#region2").change(function(event){
    $.get("filtroUnidades/"+event.target.value+"", function(response, unidad){
        $("#unidad").empty();
        $("#unidad").append("<option value=''>Seleccione una unidad</option>");
        for(i=0; i<response.length; i++){
            $("#unidad").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});
*/
</script>

        @endsection