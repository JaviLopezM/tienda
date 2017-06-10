<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>JaviShop</title>
    <!-- JavaScripts -->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#252e39"
                    },
                    "button": {
                        "background": "#14a7d0"
                    }
                },
                "content": {
                    "message": "Este sitio web utiliza cookies para mejorar la experiencia si  continua navegando se asumira que acepta nuestra política de cookies.",
                    "dismiss": "De acuerdo",
                    "link": "Más info"
                }
            })});
    </script>
</head>
<body id="app-layout">
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
                    JaviShop
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

                    <li><a href="{{ url('/store') }}">Store</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registro</a></li>
                    @else
                        <li><a href="{{ route('cart-show') }}" > <i class="fa fa-shopping-cart"></i>
                                @if($totalqty > 0)
                                 <span>
                                     {{$totalqty}}
                                 </span>
                                @endif
                            </a>
                        </li>
                        <li><a class="none"><i class="fa fa-user"></i>                           </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->user }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('perfil',Auth::user()->id) }}"><i class="fa fa-btn fa-id-badge"></i> Perfil</a></li>
                                {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')



    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal({show: true});
            });
        });
    </script>

<footer class="row footer paddingBottom">
    <div class="col-md-4  col-md-offset-1">
        <h3>Información</h3>
        <p>Esta es una aplicación de prueba y los contenidos no son reales.</p>
    </div>
    <div class="col-md-4">
    <h3>Tecnologías</h3>
        <ul>
            <li>
                Realizado con Laravel 5.3.
            </li>
            <li>
                Maquetado con Bootsrap.
            </li>
            <li>
                Funcionalidades JavaScript.
            </li>
            <li>
                Implementación de la Api de Paypal.
            </li>
            <li>
                Utilización de iconos Font Awesome.
            </li>
        </ul>


    </div>
    <div class="col-md-3">
        <h3>Autor</h3>
        Realizado por <a href="http://javierlopez.ml">Javier López</a>
        <h3>Contacto</h3>
        <a href="https://twitter.com/_javierlm" class="btn btn-primary "><i class="fa fa-twitter"></i></a>
        <a href="mailto:info@javierlopez.ml" class="btn btn-primary"><i class="fa fa-envelope"></i></a>
        <a href="http://javierlopez.ml" class="btn btn-primary"><i class="fa fa fa-globe"></i></a>
        <a href="https://github.com/JaviLopezM/tienda" class="btn btn-primary"><i class="fa fa fa-github"></i></a>
    </div>
</footer>
</body>

</html>
