
<div class="container">
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{ url('/img/FGE-icon5.png') }}" width="auto" height="60" alt="">
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            @guest
            @else    
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Busqueda de información
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('busqueda_personaInvolucrada')}}">Persona</a>
                        <a class="dropdown-item" href="{{url('busqueda_direccion')}}">Dirección</a>
                        <a class="dropdown-item" href="{{url('busqueda_vehiculos')}}">Vehículo</a>
                        <a class="dropdown-item" href="{{url('busqueda_numeroCarpeta')}}">Número de Carpeta</a>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link " href="{{url('/estadistica')}}">
                      Generación de estadisticas
                    </a>
                </li>
            @endguest
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                        
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->nombres." ".Auth::user()->primerAp." ".Auth::user()->segundoAp }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    @endguest




                   
            </ul>
        </div>
    </nav>
</div>




