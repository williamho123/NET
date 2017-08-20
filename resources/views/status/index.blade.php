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
                        <form class="login-form">
                            <div class="row">
                                <div class="input-field col s12 center">
                                    <h5 class="center">NET Team Login</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">people_outline</i>
                                    <input id="username" type="text">
                                    <label for="username" class="center-align">Team ID Code</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock_outline</i>
                                    <input id="password" type="password">
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