@extends('index')



@section('content')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var chartDiv = document.getElementById('chart_div');

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Month');
            data.addColumn('number', "Carpetas");

            data.addRows([
                ['Enero',       {{count(5)}}],
                ['Febrero',     {{count(8)}}],
                ['Marzo',      {{count(12)}}],
                ['Abril',      {{count(15)}}],
                ['Mayo',        {{count(0)}}],
                ['Junio',      {{count(20)}}],
                ['Julio',      {{count(13)}}],
                ['Agosto',     {{count(16)}}],
                ['Septiembre', {{count(13)}}],
                ['Octubre',    {{count(9)}}],
                ['Noviembre',  {{count(6)}}],
                ['Diciembre',  {{count(4)}}]
            ]);

            var Options = {
                chart:{
                    title: 'Carpetas de Investigación iniciadas XXXXX en el año 20XX'
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
    
    <br>
    <center>
        <div id="chart_div" style="width: 100%;"></div>
    </center>
    <br>
</div>
        
@endsection