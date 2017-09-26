<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>NET - Admin Login</title>

    <!--CSS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,500,800" rel="stylesheet" type="text/css">
    <link href="{{ asset(mix('css/app.css')) }}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!--Scripts-->
    <script src="{{ asset(mix('js/manifest.js')) }}" type="text/javascript"></script>
    <script src="{{ asset(mix('js/vendor.js')) }}" type="text/javascript"></script>
    <script src="{{ asset(mix('js/app.js')) }}" type="text/javascript"></script>
    <script src="{{ asset('js/lib/jquery.formatter.min.js') }}"></script>
</head>

<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<body class="cyan">
<div class="container">
    <div id="admin-login-page" class="row">
        <div class="col s12 m4 offset-m4">
            <div class="z-depth-5 card-panel">
                <form id="admin-login-form" method="POST" action="{{ url('/admin/login') }}">

                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s12 center">
                            <h5 class="center">NET Admin Login</h5>
                        </div>
                    </div>

                    <div class="center-align">
                        @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="red-text">{{ $error }}</li>
                                    @endforeach
                                </ul>
                        @endif
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">person_outline</i>
                            <input id="username" name="username" type="text">
                            <label for="username" class="center-align">Username</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password" name="password" type="password">
                            <label for="password">Password</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light col s12" type="submit" name="login">Login
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>