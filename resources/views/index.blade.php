<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FGE de Veracruz - CI</title>
    <link rel="icon" href="{{ asset('img/FGE-icon3.png') }}">
    
    <!--<script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>-->
    @include('datatable-cdn')
    <link href="{{ asset('css/estilosnavbar.css') }}" rel="stylesheet">
    
</head>
<body>
    <header>
        @include('partials.navbar')
    </header>

    <div class="container">
        
        @yield('content')
    </div>
</body>
</html>
