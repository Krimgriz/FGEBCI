@extends('index')



@section('content')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var chartDiv = document.getElementById('chart_div');

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Month');
            data.addColumn('number', "Delito");

            data.addRows([
                ['Enero',       5],
                ['Febrero',     8],
                ['Marzo',      12],
                ['Abril',      15],
                ['Mayo',        0],
                ['Junio',      20],
                ['Julio',      13],
                ['Agosto',     16],
                ['Septiembre', 13],
                ['Octubre',    9],
                ['Noviembre',  6],
                ['Diciembre',  4]
            ]);

            var Options = {
                chart:{
                    title: 'Incidencia delictiva del año 20XX'
                },
                width: 1100,
                height: 500,
                // Gives each series an axis that matches the vAxes number below.
                series: {
                    0: { color: '#222222'}
                },
                vAxes: {
                    // Adds titles to each axis.
                    0: {title: 'Cantidad'},
                    1: {title: 'Meses'}
                },
                hAxis: {
                    ticks: [
                        'Enero',       
                        'Febrero',     
                        'Marzo',      
                        'Abril',      
                        'Mayo',        
                        'Junio',      
                        'Julio',      
                        'Agosto',     
                        'Septiembre', 
                        'Octubre',    
                        'Noviembre',  
                        'Diciembre'  
                    ]
                }
            };

          

            function drawChart() {
                var classicChart = new google.charts.Line(chartDiv);
                classicChart.draw(data, Options);
            }

            drawChart();

        }
    </script>
<br>
<div class="fondo ">
    
    {{ Form::open() }}
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                    {{ Form::label('year', 'Año') }}
                    {{ Form::select('year', [
                        2010 => '2010', 
                        2011 => '2011',
                        2012 => '2012',
                        2013 => '2013',
                        2014 => '2014',
                        2015 => '2015',
                        2016 => '2016',
                        2017 => '2017',
                        2018 => '2018'], 2017, ['class' => 'form-control']
                        )}}
                </div>
                    
                <div class="col-sm-4">
                    {{ Form::label('delito', 'Delito') }}
                    {{ Form::select('delito', [
                        0 => 'Selecciona el Delito',
                        1 => 'Alto impacto',
                        2 => 'Comunies',
                        'robo' => 'robo',
                        'omicidio' => 'omicidio'], 0 ,['class' => 'form-control']
                    )}}
                </div>

                <div class="col-sm-4"><br> 
                    {{ Form::button('Generar', array('class' => 'btn btn-outline-secondary form-control')) }}
                </div>
            </div>
        </div>
    {!! Form::close() !!}
    <br>
    <center>
        <div id="chart_div" style="width: 100%;"></div>
    </center>
    <br>
</div>
        
@endsection