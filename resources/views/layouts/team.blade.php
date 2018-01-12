<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="admin-email" content="{{ env('ADMIN_EMAIL') }}"/>
    <title>NET Team - @yield('title')</title>

    <!--CSS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="{{ asset(mix('css/app.css')) }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    @yield('styles')

    <!--Scripts-->
    <script src="{{ asset(mix('js/manifest.js')) }}" type="text/javascript"></script>
    <script src="{{ asset(mix('js/vendor.js')) }}" type="text/javascript"></script>
    <script src="{{ asset(mix('js/app.js')) }}" type="text/javascript"></script>
    <script src="{{ asset('js/analytics.js') }}"></script>
    @yield('scripts')

    <style>
        header, main, footer {
            padding-left: 200px;
        }

        @media only screen and (max-width : 992px) {
            header, main, footer {
                padding-left: 0;
            }
        }

        .page-title {
            color: white;
            font-size: 2.5em;
        }
    </style>
</head>

<body>
<header>
    <nav class="top-nav teal lighten-2 z-depth-5" role="navigation">
        <div class="nav-wrapper container">
            <a class="page-title">@yield('title')</a>
            <a href="#" data-activates="slide-out" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons white-text">menu</i></a>
        </div>
    </nav>
    <div class="container">
        <ul id="slide-out" class="side-nav fixed">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{ asset('/resources/pics/material.jpg') }}">
                    </div>
                    <img class="circle" src="{{ asset('resources/pics/empty-avatar.png') }}">
                    @php($team = Auth::guard('team')->user())
                    <span class="white-text information-text">Team {{ $team->team_id_code }}</span>
                </div>
            </li>
            <li><a href="{{ url('/team') }}" class="waves-effect"><i class="material-icons">dashboard</i>Dashboard</a></li>
            <li><a href="{{ url('/team/registration') }}" class="waves-effect"><i class="material-icons">format_list_numbered</i>Registration</a></li>
            <li><a href="{{ url('/team/faq') }}" class="waves-effect"><i class="material-icons">help</i>FAQ's</a></li>
            <li>
                <a href="{{ url('/team/logout') }}" class="btn waves-effect waves-light">Logout
                    <i class="material-icons right white-text">exit_to_app</i>
                </a>
            </li>
        </ul>
    </div>
</header>

<main id="app-layout">
    @yield('content')
</main>
</body>
</html>
