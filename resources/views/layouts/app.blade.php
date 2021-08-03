<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Guia Londres</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/img/favicon/site.webmanifest') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="{{ asset('/img/logo.png') }}"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">{{ __('Sobre') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#awards">{{ __('Awards') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#patrocinios">{{ __('Patrocinios') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testemunhos">{{ __('Testemunhos') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hall">{{ __('Hall da Fama') }}</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="label label-warning">Links</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item header"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item header"><a class="nav-link" href="/sport">Sport League</a></li>
                                <li class="nav-item header"><a class="nav-link" href="/gospel">Gospel Music Awards</a></li>
                                <li class="nav-item header"><a class="nav-link" href="/networking">Guia Londres Networking</a></li>
                                <li class="nav-item header"><a class="nav-link" href="/women">Women Awards</a></li>
                                <li class="nav-item header"><a class="nav-link" href="/business">Business Awards</a></li>
                            </ul>
                        </li> -->
                        <li class="ml-5 nav-item participe d-flex align-items-center justify-content-center">
                            <a class="nav-link" href="#participe">{{ __('Participe Já') }}</a>
                        </li>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            @if (Route::currentRouteName('admin'))
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                            @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
