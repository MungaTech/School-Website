<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <!-- Mobile Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
 
      <!-- Site Metas -->
     <title>Granite Academy</title>
     <meta name="keywords" content="">
     <meta name="description" content="">
     <meta name="author" content="">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
     <!-- Site CSS -->
     <link rel="stylesheet" href="{{ asset('css/main.css') }}">
     <!-- ALL VERSION CSS -->
     <link rel="stylesheet" href="{{ asset('css/versions.css') }}">
     <!-- Responsive CSS -->
     <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
     <!-- Custom CSS -->
     <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
 
     <!-- Modernizer for Portfolio -->
     <script src="{{ asset('js/modernizer.js')}}"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Granite-Academy') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Granite-Academy') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="flex justify-center space-x-4">
                    <a href="/" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Home</a>
                    <a href="/about" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">About</a>
                    <a href="/academic" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Academic</a>
                    <a href="/boarding" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Boarding</a>
                    <a href="/contact" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Contact</a>
                  </nav>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
        

        <main class="py-4">
            @yield('content')
     
        </main>
        <div class="copyrights">
            <div class="container">
                <div class="footer-distributed">
                    <div class="footer-center">
                        <p class="footer-company-name">All Rights Reserved. &copy; 2023 </a> Design By Ian Mungai</a></p>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->
        
    </div>
</body>
</html>
