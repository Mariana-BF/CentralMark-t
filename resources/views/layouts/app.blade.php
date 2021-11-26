<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- icono --}}
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="storage//imagenes/centralMarket.png">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}"> 
                    <img class="card-img-top" src="{{ asset('storage//images/centralMarket.png') }}" width="55" height="55" alt="" />                    
                </a>
                <a class="navbar-brand" style="font-style: oblique" href="{{ url('/') }}"> 
                    <h1>Central Mark-T</h1>
                </a>
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
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-black size1" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-black size1" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="text-black nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('platillos') }}">
                                        Catalogo
                                    </a>
                                    
                                    @if ( Auth::user()->fullacces=='yes')

                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        Ver mis productos
                                    </a>

                                    <a class="dropdown-item" href="{{route('repartidores') }}">
                                        Repartidores
                                    </a>

                                        @endif
                                        @if ( Auth::user()->fullacces=='no')

                                        <a class="dropdown-item" href="{{ route('Order.estatus') }}">
                                            Seguir pedido
                                        </a>

                                        <a class="dropdown-item" href="{{ route('editarPerfil') }}">
                                            Editar perfil
                                        </a>
                                          
                                        
                                        @endif
                                    
                                    
                                    
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')

        </main>

        <footer class="bg-white text-black py-5 mt-2 ">
            <div class="container">
                <div class="row container atras">
                    {{-- Sobre nosotros --}}
                    <div class="col-md-4 footer-col">
                        <h3 class="text-uppercase">Sobre Nosotros</h3>
                        <p> Somos una tienda en linea donde puedes encontrar productos frescos y de calidad del mercado de tu ciudad.</p>
                        
                    </div>
                    {{-- Donde nos ubicamos --}}
                    <div class=" col-md-4 ">
                        <h3 class="text-uppercase">Nuestros socios</h3>
                        <div class="d-flex  align-items col-7 ">
                            
                            <img class="card-img-top" src="{{ asset('storage//images/socios.jpg') }}" height="85" width="840" alt="" />
                               
                            
                        </div>
                        
                    </div>
                    {{-- redes sociales --}}
                    <ul class="col-3 list-unstyled ">
                        <h3 class="text-uppercase">Redes Sociales</h3>
                        <li class="d-flex justify-content-between mt-4">
                            
                            <a href="https://www.facebook.com/lafonditacocina/" class="text-reset">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="#" class="text-reset">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="https://www.instagram.com/explore/locations/242253191/la-fondita/?hl=es" class="text-reset">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="#" class="text-reset">
                                <i class="fab fa-pinterest-p fa-2x"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </footer>
    </div>
    @yield('javascript')
</body>
</html>
