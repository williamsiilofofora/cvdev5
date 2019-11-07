<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Lez'Arts du Web") }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" async></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>

<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-light shadow-sm  ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span style="color:green"><span>L</span>ez'<span>A</span>rts </span><span>D</span>u <span>W</span>eb
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="#bgvid" class="nav-link menuAccueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="#aboutMe" class="nav-link menuAbout">A propos de moi</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link menuServices">Mes services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link menuPortfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link menuContact">Contact</a>
                        </li>



                        @guest

                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <li class="nav-item">
                            <a id="darkTrigger" class="nav-link" style="padding:4px">Darktheme
                            <button class="btn btn-sm" ><i class="fa fa-adjust"></i></button></a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>


        <main class="py-0">
            @yield('content')
        </main>
    </div>
    
    <script src={{asset('js/script.js')}} defer></script>
    


</body>



</html>