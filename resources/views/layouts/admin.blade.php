<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>NET Admin - @yield('title')</title>

    <!--CSS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,500,800" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

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
    <nav class="top-nav teal lighten-2" role="navigation">
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
                    @php($admin = Auth::guard('admin')->user())
                    <span class="white-text name">{{ $admin->firstname }} {{ $admin->lastname }}</span>
                    <span class="white-text email">{{ $admin->email }}</span>
                </div>
            </li>
            <li><a href="{{ url('/admin') }}" class="waves-effect"><i class="material-icons">dashboard</i>Dashboard</a></li>
            <li>
                <a href="{{ url('/admin/logout') }}" class="btn waves-effect waves-light">Logout
                    <i class="material-icons right white-text">exit_to_app</i>
                </a>
            </li>
        </ul>
    </div>
</header>

<main id="app-layout">

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ asset('js/lib/materialize.min.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    @yield('scripts')

    @yield('content')
</main>
</body>
</html>
