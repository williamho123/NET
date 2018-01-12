@extends('layouts.app')

@section('title','Registration')

@section('scripts')
    <script src="{{ asset(mix('js/component.js')) }}" type="text/javascript"></script>
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <h3>Registration</h3>

            @if(registrationIsOpen())
                <div class="information-text">
                    Registration is on a first-come, first-serve basis so we encourage teams to register as soon as possible!
                </div>
                <br>

                <div class="information-text">
                    <b>Registration Deadline: </b> {{ getFormattedRegistrationEndDate() }}
                </div>
                <br>

                @include('registration.information-cards-partial')

                <p class="information-text red-text center-align">
                    Please designate a team captain to fill out the application. One application per team.
                </p>

                <div class="divider"></div>
                <br>

                <div class="center-align">
                    <a href="{{ url('/registration/create') }}" class="btn btn-large waves-effect waves-light">Start Registration
                        <i class="material-icons right">keyboard_arrow_right</i>
                    </a>
                </div>
            @else
                <div class="row">
                    <div class="col s12">
                        <div class="card indigo darken-2 z-depth-5">
                            <div class="card-content">
                                @if(registrationHasEnded())
                                    <span class="card-title white-text center-align">
                                         Registration has ended for the current year.
                                    </span>

                                    <br>
                                    <div class="divider"></div>
                                    <br>

                                    <p class="information-text white-text center-align">
                                        Please <a href="{{ url('/contact') }}">contact us</a> if you have any questions!
                                    </p>
                                @else
                                    <span class="card-title white-text center-align">
                                        Registration opens on {{ getFormattedOpenRegDate() }}.
                                    </span>

                                    <br>

                                    <p class="information-text white-text center-align">
                                        Sign up for updates below!
                                    </p>

                                    <br>
                                    <div class="divider white"></div>
                                    <br><br>

                                    <div id="vue-gov">
                                        <email-update-form></email-update-form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>
                <br>

                @include('registration.information-cards-partial')

                <p class="information-text red-text center-align">
                    Please designate a team captain to fill out the application. One application per team.
                </p>
            @endif
        </div>
    </div>

    <script type="text/javascript">
        new Vue ({
            el: '#vue-gov'
        })
    </script>
@endsection