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
            data.addColumn('number', "Menores de 12");
            data.addColumn('number', "12 - 17");
            data.addColumn('number', "18 - 25");
            data.addColumn('number', "26 - 30");
            data.addColumn('number', "31 - 35");
            data.addColumn('number', "36 - 40");
            data.addColumn('number', "41 - 45");
            data.addColumn('number', "46 - 50");
            data.addColumn('number', "51 - 55");
            data.addColumn('number', "56 - 59");
            data.addColumn('number', "Mayores de 60"); 

            data.addRows([
                [new Date(2014, 0),   5,   5,  10,   9,   6,   5,  10,   9,   6,  5,  5],
                [new Date(2014, 1),   8,   5,   9,  15,   6,  10,   9,   6,   5,  8,  5],
                [new Date(2014, 2),  12,   5,   9,  15,   6,   5,  10,   9,   6,  8,  4],
                [new Date(2014, 3),  15,   5,  10,   9,  15,  10,   9,   6,   5,  8,  5],
                [new Date(2014, 4),   0,   5,  10,   9,   6,   5,  10,   9,  15,  9,  5],
                [new Date(2014, 5),  20,   5,  10,   9,  15,  10,   9,   6,   5,  8,  3],
                [new Date(2014, 6),   5,  10,   9,  15,   6,   5,  10,   9,   6,  7,  5],
                [new Date(2014, 7),  16,   5,  10,   9,  15,   5,  10,   9,  15,  2,  1],
                [new Date(2014, 8),  13,   5,   9,  15,   6,   5,  10,   9,   6,  8,  5],
                [new Date(2014, 9),   9,   5,  10,   9,   6,   5,  10,   9,  15,  5,  7],
                [new Date(2014, 10),  6,   5,  10,   9,  15,   5,  10,   9,   6,  8,  5],
                [new Date(2014, 11),  4,   5,  10,   9,  15,   5,  10,   9,  15,  1,  8]
            ]);

            var Options = {
                title: 'Incidencia delictiva por Edad del año 20XX',
                width: 1100,
                height: 500,
                // Gives each series an axis that matches the vAxes number below.
                series: {
                    0: { color: '#6b9527'},
                    1: { color: '#465c1e'},
                    2: { color: '#236829'},
                    3: { color: '#133a27'},
                    4: { color: '#222222'},
                    5: { color: '#575757'},
                    6: { color: '#7d7d7d'},
                    7: { color: '#999999'},
                    8: { color: '#7d5f46'},
                    9: { color: '#694f46'},
                    10: { color: '#423224'},
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