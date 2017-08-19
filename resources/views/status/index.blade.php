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
            <div class="row">
                <div class="col s12">
                    <div class="card blue-grey lighten-1 z-depth-5">
                        <div class="card-content white-text">
                            <span class="card-title">Enter credentials</span>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="team_id" name="team_id" type="text">
                                    <label for="team_id" class="white-text">Team ID Code</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" name="password" type="password">
                                    <label for="password" class="white-text">Password</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" name="app_status_submit" id="app_status_submit">Login
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection