@extends('layouts.app')

@section('title','Status')

@section('content')
    <div class="container">
        <div class="section">
            <h3>Application Status</h3>
            <p class="information-text">
                Enter your team's login information below to check the status of your application or to complete the next steps of
                your registration.
            </p>
            <div id="team-login" class="row">
                <div class="col s12 m4 offset-m4">
                    <div class="z-depth-5 card-panel">
                        <form id="team-login-form" method="POST" action="{{ url('/team/login') }}">

                            {{ csrf_field() }}

                            <div class="row">
                                <div class="input-field col s12 center">
                                    <h5 class="center">NET Team Login</h5>
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
                                    <i class="material-icons prefix">people_outline</i>
                                    <input id="team_id_code" name="team_id_code" type="text">
                                    <label for="team_id_code" class="center-align">Team ID Code</label>
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
    </div>
@endsection