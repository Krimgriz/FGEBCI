@extends('index')



@section('content')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var button = document.getElementById('change-chart');
            var chartDiv = document.getElementById('chart_div');

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Month');
            data.addColumn('number', "Hombre");
            data.addColumn('number', "Mujer");

            data.addRows([
                ['Enero',       5,  9],
                ['Febrero',     8,  8],
                ['Marzo',      12,  7],
                ['Abril',      15,  6],
                ['Mayo',        0,  5],
                ['Junio',      20,  4],
                ['Julio',      13,  8],
                ['Agosto',     16,  6],
                ['Septiembre', 13,  2],
                ['Octubre',    9,  4],
                ['Noviembre',  6,  8],
                ['Diciembre',  4,  7]
            ]);

            var Options = {
                chart:{
                    title: 'Incidencia delictiva por Sexo del año 20XX'
                },
                width: 1100,
                height: 500,
                // Gives each series an axis that matches the vAxes number below.
                series: {
                    0: { color: '#222222'},
                    1: { color: '#999999'}
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
                <div class="col-sm-6">

                    {{ Form::label('year', 'Año') }}
                    {{ Form::select('year', [
                        2010 => '2010', 
                        2011 => '2011',
                        2012 => '2012',
                        2013 => '2013',
                        2014 => '2014',
                        2015 => '2015',
                        2016 => '2016',
                        2017 => '2017'], 2017, ['class' => 'form-control']
                        )}}
                </div>
                

                <div class="col-sm-6"><br> 
                    {{ Form::button('Generar', array('class' => 'form-control')) }}
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