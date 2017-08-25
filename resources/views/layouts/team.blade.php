<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>NET Team - @yield('title')</title>

    <!--CSS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,500,800" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    @yield('styles')
</head>

<body>
    <main id="app-layout">
        <nav class="teal lighten-2" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="{{ url('/') }}" class="brand-logo"><img src="{{ asset('resources/pics/logo.png') }}"></a>
                <a class="brand-logo white-text center">@yield('title')</a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="white-text waves-effect waves-light btn" href="{{ url('/team/logout') }}">Logout
                            <i class="material-icons right white-text">exit_to_app</i>
                        </a>
                    </li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a class="white-text waves-effect waves-light btn" href="{{ url('/team/logout') }}">Logout
                            <i class="material-icons right white-text">exit_to_app</i></a>
                    </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <!--Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="{{ asset('js/lib/materialize.min.js') }}"></script>
        <script src="{{ asset('js/init.js') }}"></script>
        @yield('scripts')

        @yield('content')
    </main>
</body>
</html>
