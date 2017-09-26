<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="admin-email" content="{{ env('ADMIN_EMAIL') }}"/>
    <title>NET - @yield('title')</title>

    <!--CSS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,500,800" rel="stylesheet" type="text/css">
    <link href="{{ asset(mix('css/app.css')) }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    @yield('styles')

    <!--Scripts-->
    <script src="{{ asset(mix('js/manifest.js')) }}" type="text/javascript"></script>
    <script src="{{ asset(mix('js/vendor.js')) }}" type="text/javascript"></script>
    <script src="{{ asset(mix('js/app.js')) }}" type="text/javascript"></script>
    <script src="{{ asset('js/lib/jquery.formatter.min.js') }}"></script>
    @yield('scripts')
</head>

<body>
    <main id="app-layout">
        <nav class="teal lighten-2" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="{{ url('/') }}" class="brand-logo"><img src="{{ asset('resources/pics/logo.png') }}"></a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="white-text" href="{{ url('/about') }}">About</a></li>
                    <li><a class="white-text" href="{{ url('/tournament') }}">The Tournament</a></li>
                    <li><a class="white-text" href="{{ url('/rules') }}">Rules</a></li>
                    <li><a class="white-text" href="{{ url('/team') }}">App Status</a></li>
                    <li><a class="white-text" href="{{ url('/contact') }}">Contact</a></li>
                    <li><a class="white-text waves-effect waves-light btn" href="{{ url('/registration') }}">Register</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/tournament') }}">The Tournament</a></li>
                    <li><a href="{{ url('/rules') }}">Rules</a></li>
                    <li><a href="{{ url('/team') }}">App Status</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a class="white-text waves-effect waves-light btn" href="{{ url('/registration') }}">Register</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a>
            </div>
        </nav>

        @yield('content')
    </main>

    <footer class="page-footer teal lighten-2">
        <div class="footer-copyright">
            <div class="container">
                &copy; 2016-2017 Northwestern Economics Tournament
            </div>
        </div>
    </footer>
</body>
</html>
