@extends('index')



@section('content')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var chartDiv = document.getElementById('chart_div');

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Mes');
            data.addColumn('number', "{{$tipo2}}");

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

<div class="fondo ">
    
    <br>
    <center>
        <div id="chart_div" style="width: 100%;"></div>
        <br>
        <table class="table" style="text-align: center;">
            <thead>
                <tr>
                    <th>Enero</th>
                    <th>Febrero</th>
                    <th>Marzo</th>
                    <th>April</th>
                    <th>Mayo</th>
                    <th>Junio</th>
                    <th>Julio</th>
                    <th>Agosto</th>
                    <th>Septiembre</th>
                    <th>Octubre</th>
                    <th>Noviembre</th>
                    <th>Diciembre</th>
                    <th>Total</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$Ene}}</td>
                    <td>{{$Feb}}</td>
                    <td>{{$Mar}}</td>
                    <td>{{$Abr}}</td>
                    <td>{{$May}}</td>
                    <td>{{$Jun}}</td>
                    <td>{{$Jul}}</td>
                    <td>{{$Ago}}</td>
                    <td>{{$Sep}}</td>
                    <td>{{$Oct}}</td>
                    <td>{{$Nov}}</td>
                    <td>{{$Dic}}</td>
                    <td>{{$Ene+$Feb+$Mar+$Abr+$May+$Jun+$Jul+$Ago+$Sep+$Oct+$Nov+$Dic}}</td>
                </tr>
            </tbody>
        </table>
    </center>

    <br>
</div>
        
@endsection