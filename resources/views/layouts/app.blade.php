<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158812833-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-158812833-1');
    </script>
{{-- <meta http-equiv="Content-Security-Policy" content="default-src https:"> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Williams KUBIAK">
    <meta name="google-site-verification" content="vdWcuFNrPFOx00L0jgELXdMQFng41Udr6LqXjO-dOgI" />
    <meta name="description" content="Développeur web independant ,développement et création de sites internet,  
     vitrine, e-commerce et d'applications web pour professionnels et particuliers" lang="fr">
    <meta name="keywords"
        content="Développement web, création, Lez'arts du web, agence web, applications web, sites internet, Wordpress, woocommerce, prestashop, lavarel, vuejs, responsive, design, site internet, site web, Vannes, Morbihan, Etel, Lorient, Auray, 56, 56000, Bretagne">
    <meta name="language" content="fr">
    <meta name="robots" content="index, follow">
    <meta name="distribution" content="global">
    <meta name="author" content="williams KUBIAK">
    <meta name="copyright" content="Lez'Arts du web">
    <meta name="abstract" content="Ce site presente mon activité, mes réalisations et permet de me contacter">
    <link rel="canonical" href="https://www.lezartsduweb.fr/" />
    <meta property="og:title" content="Lez'Arts du web - Développeur freelance " />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:site_name" content="lezartsduweb.fr" />
    <meta property="og:url" content="https://lezartsduweb.fr/" />
    <meta property="og:description" content="Développeur web indépendant - Création de sites web">
    <meta property="og:image" content="{{asset('images/logoseul.png')}}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lez'Arts du Web - Créations d'applications et de sites web</title>
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5R5VVGD');</script>
<!-- End Google Tag Manager -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://lezartsduweb.fr/",
            "name": "Lez'Arts Du Web", 
            "sameAs": [
                "https://twitter.com/lezartsduweb",
                "https://www.linkedin.com/in/williams-kubiak-3525ab173",
                "https://www.facebook.com/LezArts-Du-Web-109673493957666/",
            ],
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "0675704110",
                "contactType": "Contact"
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "34 bis rue général Leclerc",
                "postalCode": "56410",
                "addressCountry": "FR"
            },
           
        }
    </script>
</head>
@include('cookieConsent::index')

<body class="dark">
   <!-- Google Tag Manager (noscript) -->
<noscript><iframe sandbox="allow-same-origin allow-scripts" src="https://www.googletagmanager.com/ns.html?id=GTM-5R5VVGD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-dark shadow-sm" style="position:sticky">
            <div class="container">
                <a class="navbar-brand col-xs-8 col-8 col-lg-4 " href="{{ url('/') }}">
                    <img src="{{asset('./images/logo3.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler col-xs-3" type="button" data-toggle="collapse"
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
                            <a href="/" class="nav-link menuAccueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="#aboutMe" class="nav-link menuAbout">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link menuServices">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link menuPortfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link menuContact">Contact</a>
                        </li>



                        @guest

                        <!-- Authentication Links -->
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li> --}}
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
                            <a id="darkTrigger" class="nav-link">Ligththeme
                                <button class="btn btn-sm"><i class="fa fa-adjust"></i></button></a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>


        <main class="py-0">
            @yield('content')
        </main>
    </div>
    <a href="/" class="ancre" style="bottom:60px;right:60px">
        <i class="fa fa-arrow-up"></i>
    </a>
</body>
<script src={{asset('js/script.js')}} defer></script>
<script src={{asset('js/lazysizes.min.js')}} defer></script>

</html>