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
                ['Enero',      {{ $Ene }}],
                ['Febrero',    {{ $Feb }}],
                ['Marzo',      {{ $Mar }}],
                ['Abril',      {{ $Abr }}],
                ['Mayo',       {{ $May }}],
                ['Junio',      {{ $Jun }}],
                ['Julio',      {{ $Jul }}],
                ['Agosto',     {{ $Ago }}],
                ['Septiembre', {{ $Sep }}],
                ['Octubre',    {{ $Oct }}],
                ['Noviembre',  {{ $Nov }}],
                ['Diciembre',  {{ $Dic }}]
            ]);

            var Options = {
                chart:{
                    title: '{{$tipo}} en el año {{$year}}'
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