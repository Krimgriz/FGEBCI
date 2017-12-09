@extends('index')



@section('content')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var chartDiv = document.getElementById('chart_div');

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Mes');
            data.addColumn('number', "{{$var1}}");
            data.addColumn('number', "{{$var2}}");

            data.addRows([
                ['Enero',      {{ $Ene1 }},  {{ $Ene2 }}],
                ['Febrero',    {{ $Feb1 }},  {{ $Feb2 }}],
                ['Marzo',      {{ $Mar1 }},  {{ $Mar2 }}],
                ['Abril',      {{ $Abr1 }},  {{ $Abr2 }}],
                ['Mayo',       {{ $May1 }},  {{ $May2 }}],
                ['Junio',      {{ $Jun1 }},  {{ $Jun2 }}],
                ['Julio',      {{ $Jul1 }},  {{ $Jul2 }}],
                ['Agosto',     {{ $Ago1 }},  {{ $Ago2 }}],
                ['Septiembre', {{ $Sep1 }},  {{ $Sep2 }}],
                ['Octubre',    {{ $Oct1 }},  {{ $Oct2 }}],
                ['Noviembre',  {{ $Nov1 }},  {{ $Nov2 }}],
                ['Diciembre',  {{ $Dic1 }},  {{ $Dic2 }}]
            ]);

            var Options = {
                chart:{
                    title: '{{$nombre}} en el año {{$year}}'
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

<div class="fondo ">
    
    <br>
    <center>
        <div id="chart_div" style="width: 100%;"></div>
        <br>
        <div class="table-responsive">
            
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th></th>
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
                        <td>{{$var1}}</td>
                        <td>{{$Ene1}}</td>
                        <td>{{$Feb1}}</td>
                        <td>{{$Mar1}}</td>
                        <td>{{$Abr1}}</td>
                        <td>{{$May1}}</td>
                        <td>{{$Jun1}}</td>
                        <td>{{$Jul1}}</td>
                        <td>{{$Ago1}}</td>
                        <td>{{$Sep1}}</td>
                        <td>{{$Oct1}}</td>
                        <td>{{$Nov1}}</td>
                        <td>{{$Dic1}}</td>
                        <td>{{$Ene1+$Feb1+$Mar1+$Abr1+$May1+$Jun1+$Jul1+$Ago1+$Sep1+$Oct1+$Nov1+$Dic1}}</td>
                    </tr>
                    <tr>
                        <td>{{$var2}}</td>
                        <td>{{$Ene2}}</td>
                        <td>{{$Feb2}}</td>
                        <td>{{$Mar2}}</td>
                        <td>{{$Abr2}}</td>
                        <td>{{$May2}}</td>
                        <td>{{$Jun2}}</td>
                        <td>{{$Jul2}}</td>
                        <td>{{$Ago2}}</td>
                        <td>{{$Sep2}}</td>
                        <td>{{$Oct2}}</td>
                        <td>{{$Nov2}}</td>
                        <td>{{$Dic2}}</td>
                        <td>{{$Ene2+$Feb2+$Mar2+$Abr2+$May2+$Jun2+$Jul2+$Ago2+$Sep2+$Oct2+$Nov2+$Dic2}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </center>

    <br>
</div>
        
@endsection