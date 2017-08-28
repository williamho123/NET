@extends('layouts.admin')

@section('title', 'Settings')

@section('scripts')
    <script src="{{ asset('js/admin-settings.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <div class="card indigo darken-2 z-depth-5">
                        <div class="card-content">
                                <span class="card-title white-text">
                                    Registration Off Settings
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
        </div>
    </div>
@endsection