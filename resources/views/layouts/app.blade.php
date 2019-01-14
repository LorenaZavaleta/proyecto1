<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MSICU</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">MSICU UV</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (!Session::has('logged'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>
                        @else
                            @if (Session::get('tipo') == 'S')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('carreras.index') }}">Carreras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"> | </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('experiencias.index') }}">Experiencias Educativas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"> | </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('horarios.index') }}">Horarios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"> | </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="{{ route ('registro')}}">Académicos | </a>
                                </li>
                            @elseif (Session::get('tipo') == 'P')
                                <li class="nav-item">
                                    <a class="nav-link" href="">Reservación</a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Session::get('nombre') }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('usuarios.exit') }}">
                                        {{ __('Cerrar sesión') }}
                                    </a>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('layouts._message')
            @yield('content')
        </main>
    </div>
    <br>
    <div class="container-fluid" align="center">
        <footer class="modal-footer">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p class="copyright text-muted">Copyright &copy; MSICU - Universidad Veracruzana {{ date('Y') }}.</p>
            </div>
        </footer>
    </div>
</body>
</html>
