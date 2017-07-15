<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>NET</title>

    <!--CSS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,500,800" rel="stylesheet" type="text/css">
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <style>
        html, body {
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body id="app-layout">
<nav class="teal lighten-2" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="{{ url('/') }}" class="brand-logo"><img src="resources/pics/logo.png"></a>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="{{ url('/logistics') }}">Details & Logistics</a></li>
            <li><a href="{{ url('/speakers') }}">Speakers</a></li>
            <li><a href="{{ url('/rules') }}">Rules</a></li>
            <li><a href="{{ url('/questions') }}">Sample Questions</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="{{ url('/logistics') }}">Details & Logistics</a></li>
            <li><a href="{{ url('/speakers') }}">Speakers</a></li>
            <li><a href="{{ url('/rules') }}">Rules</a></li>
            <li><a href="{{ url('/questions') }}">Sample Questions</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a class="white-text" href="{{ url('/about') }}">About</a></li>
            <li><a class="white-text" href="{{ url('/bios') }}">The Team</a></li>
            <li><a class="white-text dropdown-button" data-activates="dropdown1">The Tournament<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="white-text" href="{{ url('/registration') }}">Registration</a></li>
            <li><a class="white-text" href="{{ url('/contact') }}">Contact</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/bios') }}">The Team</a></li>
            <li><a class="dropdown-button" data-activates="dropdown2">The Tournament<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="{{ url('/registration') }}">Registration</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a>
    </div>
</nav>

@yield('content')

<footer class="page-footer teal lighten-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>

            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>

<!--Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/init.js"></script>

</body>
</html>
