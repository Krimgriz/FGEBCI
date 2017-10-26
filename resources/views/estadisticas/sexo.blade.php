@extends('index')



@section('content')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line', 'corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var button = document.getElementById('change-chart');
            var chartDiv = document.getElementById('chart_div');

            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Month');
            data.addColumn('number', "Hombre");
            data.addColumn('number', "Mujer");

            data.addRows([
                [new Date(2014, 0),  5,  9],
                [new Date(2014, 1),  8,  8],
                [new Date(2014, 2), 12,  7],
                [new Date(2014, 3), 15,  6],
                [new Date(2014, 4),  0,  5],
                [new Date(2014, 5), 20,  4],
                [new Date(2014, 6), 13,  8],
                [new Date(2014, 7), 16,  6],
                [new Date(2014, 8), 13,  2],
                [new Date(2014, 9),  9,  4],
                [new Date(2014, 10), 6,  8],
                [new Date(2014, 11), 4,  7]
            ]);

            var Options = {
                title: 'Incidencia delictiva por Sexo del año 20XX',
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
                        new Date(2014, 0), 
                        new Date(2014, 1), 
                        new Date(2014, 2), 
                        new Date(2014, 3),
                        new Date(2014, 4), 
                        new Date(2014, 5), 
                        new Date(2014, 6), 
                        new Date(2014, 7),
                        new Date(2014, 8), 
                        new Date(2014, 9), 
                        new Date(2014, 10), 
                        new Date(2014, 11)
                    ]
                }
            };

          

            function drawChart() {
                var classicChart = new google.visualization.LineChart(chartDiv);
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