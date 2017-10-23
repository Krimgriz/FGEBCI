@extends('index')

@section('extras')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line', 'corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var button = document.getElementById('change-chart');
            var chartDiv = document.getElementById('chart_div');

            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Month');
            data.addColumn('number', "Average Temperature");
            data.addColumn('number', "Average Hours of Daylight");

            data.addRows([
                [new Date(2014, 0),  -.5,  5.7],
                [new Date(2014, 1),   .4,  8.7],
                [new Date(2014, 2),   .5,   12],
                [new Date(2014, 3),  2.9, 15.3],
                [new Date(2014, 4),  6.3, 18.6],
                [new Date(2014, 5),    9, 20.9],
                [new Date(2014, 6), 10.6, 19.8],
                [new Date(2014, 7), 10.3, 16.6],
                [new Date(2014, 8),  7.4, 13.3],
                [new Date(2014, 9),  4.4,  9.9],
                [new Date(2014, 10), 1.1,  6.6],
                [new Date(2014, 11), -.2,  4.5]
            ]);

            var Options = {
                title: 'Average Temperatures and Daylight in Iceland Throughout the Year',
                width: 900,
                height: 500,
                // Gives each series an axis that matches the vAxes number below.
                series: {
                    0: {targetAxisIndex: 0},
                    1: {targetAxisIndex: 1}
                },
                vAxes: {
                    // Adds titles to each axis.
                    0: {title: 'Temps (Celsius)'},
                    1: {title: 'Daylight'}
                },
                hAxis: {
                    ticks: [new Date(2014, 0), new Date(2014, 1), new Date(2014, 2), new Date(2014, 3),
                        new Date(2014, 4), new Date(2014, 5), new Date(2014, 6), new Date(2014, 7),
                        new Date(2014, 8), new Date(2014, 9), new Date(2014, 10), new Date(2014, 11)
                    ]
                },
                vAxis: {
                    viewWindow: {
                        max: 30
                    }
                }
            };

          

            function drawChart() {
                var classicChart = new google.visualization.LineChart(chartDiv);
                classicChart.draw(data, Options);
            }

            drawChart();

        }
    </script>
@endsection

@section('content')
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
                        2017 => '2017'], 2017, ['class' => 'form-control']
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

                <div class="col-sm-4"><br> 
                    {{ Form::submit('Generar', array('class' => 'form-control')) }}
                </div>
            </div>
        </div>
    {!! Form::close() !!}
    <br>
    <div id="chart_div" align="center"></div>
    <br>
</div>
        
@endsection