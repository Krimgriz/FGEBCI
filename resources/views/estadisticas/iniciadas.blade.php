@extends('index')



@section('content')


<div class="fondo ">
<br> 

    <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
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
    
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
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

                                <div class="col-4"><br> 
                                    {{ Form::submit('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <br>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading2">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Delito
                    </a>
                </h5>
            </div>
  
            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="card-block fondo">
                    asdasdasdas2
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading3">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    Etnia
                    </a>
                </h5>
            </div>
  
            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="card-block fondo">
                    asdasdasdas3
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading4">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    Municipio
                    </a>
                </h5>
            </div>
  
            <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="card-block fondo">
                    asdasdasdas4
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading5">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    Unidad
                    </a>
                </h5>
            </div>
  
            <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5">
                <div class="card-block fondo">
                    asdasdasdas5
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading6">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    Region
                    </a>
                </h5>
            </div>
  
            <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6">
                <div class="card-block fondo">
                    asdasdasdas6
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading7">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    Sexo
                    </a>
                </h5>
            </div>
  
            <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7">
                <div class="card-block fondo">
                    asdasdasdas7
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="heading8">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                    Colonia
                    </a>
                </h5>
            </div>
  
            <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8">
                <div class="card-block fondo">
                    {{ Form::open() }}
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
                                {{ Form::label('municipio', 'Municipio') }}
                                {{ Form::select('municipio', [
                                    0 => 'Selecciona Municipio',
                                    'altolucero' => 'Alto Lucero',
                                    'altotonga' => 'Altotonga',
                                    'banderilla' => 'Banderilla',
                                    'naolinco' => 'Naolinco'], 0 ,['class' => 'form-control']
                                )}}
                            </div>

                            <div class="col-sm-4">
                                {{ Form::label('colonia', 'Colonia') }}
                                {{ Form::select('colonia', [
                                    0 => 'Selecciona la Colonia',
                                    'revolucion' => 'Revolución',
                                    'clavijero' => 'Clavijero',
                                    '20nviembre' => '20 de Noviembre',
                                    'centro' => 'Centro'], 0 ,['class' => 'form-control']
                                )}}
                            </div>

                            <div class="col-sm-12"><br> 
                                {{ Form::button('Generar', array('class' => 'form-control btn btn-outline-secondary')) }}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>





</div>


        @endsection