<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/reto_oca/public/home" style="color:#777"><span style="font-size:15pt">&#9820;</span> Logo</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('home') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/home')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span> Juego
                        </a>
                    </li>

                    <li class="nav-item {{ Request::is('imprimir') && ! Request::is('imprimir/informacion')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/imprimirInformacion')}}"> Información </a>
                    </li>

                    {{-- Esto solo tiene que aparecer cuando esta logeado --}}
                    <li class="nav-item {{  Request::is('peticion/crear') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/peticionMujeres')}}">
                            <span>&#10010</span> Añadir mujer
                        </a>
                    </li>

                    {{-- Esto solo tiene que aparecer cuando esta logeado --}}
                    <li class="nav-item {{  Request::is('peticion/tabla') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/peticiones')}}"> Gestionar peticiones </a>
                    </li>

                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
