@extends('layouts.app')

@section('title','Registration')

@section('styles')
    <link href="{{ asset('css/sweetalert.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
@endsection

@section('scripts')
    <script src="{{ asset('js/lib/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/registration-index.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <h3>Registration</h3>

            @if(registrationIsOpen())
                <p class="information-text">
                    We are excited that you want to participate in NET! Please carefully review the information below
                    before starting on the application - we look forward to reading them.
                </p>

                @include('registration.information-cards-partial')

                <p class="information-text red-text center-align">
                    Please designate a team captain to fill out the application. One application per team.
                </p>

                <div class="divider"></div>
                <br>

                <div class="center-align">
                    <a href="{{ url('/registration/create') }}" class="btn btn-large waves-effect waves-light">Start Application
                        <i class="material-icons right">keyboard_arrow_right</i>
                    </a>
                </div>

                <br>
            @else
                <div class="row">
                    <div class="col s12">
                        <div class="card indigo darken-2 z-depth-5">
                            <div class="card-content">
                                <span class="card-title white-text center-align">
                                    Registration opens on January 8, 2018.
                                </span>

                                <br>

                                <p class="information-text white-text center-align">
                                    Sign up for updates below!
                                </p>

                                <br>
                                <div class="divider white"></div>
                                <br><br>

                                <div class="row">
                                    <form id="email-update-form" method="POST" action="{{ url('/registration/update') }}">
                                        <div class="input-field col s10">
                                            <i class="material-icons prefix white-text">email</i>
                                            <input id="email_update" name="email_update" type="email" class="white-text">
                                            <label for="email_update" class="white-text">Your Email</label>
                                        </div>
                                        <div class="input-field col s2">
                                            <button class="btn waves-effect waves-light" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>
                <br>

                <h5>Registration Guidelines</h5>
                @include('registration.information-cards-partial')

                <p class="information-text red-text center-align">
                    Please designate a team captain to fill out the application. One application per team.
                </p>
            @endif
        </div>
    </div>
@endsection