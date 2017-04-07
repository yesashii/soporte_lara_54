<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->

                        <!-- Menu de sap -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ 'SAP' }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('tablasap') }}">Tablas de SAP</a>
                                    </li>
                                </ul>
                            </li>
                        <!-- #Menu de sap -->


                        <!-- Menu de Utilidades -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ 'Utilidades' }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('forecast') }}">Cargar forecast</a>
                                </li>
                            </ul>
                        </li>
                        <!-- #Menu de Utilidades -->

                        <!-- Menu de Documentacion -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ 'Documentación' }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">

                                <li class="dropdown-submenu">
                                    <a class="test" tabindex="-1" href="#">Modelos <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="{{ route('sqlserver') }}">SqlServer</a></li>

                                   <!--     <li class="dropdown-submenu">
                                            <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">3rd level dropdown</a></li>
                                                <li><a href="#">3rd level dropdown</a></li>
                                            </ul>
                                        </li>
                                     -->
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <!-- #Menu de Documentacion -->


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>




    <script>
        $(document).ready(function(){
            $('.dropdown-submenu a.test').on("click", function(e){
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>
</body>
</html>
