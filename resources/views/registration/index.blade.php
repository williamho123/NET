@extends('layouts.app')

@section('title','Registration')

@section('content')
    <div class="container">
        <div class="section">
            <h3>Registration</h3>

            @if(registrationIsOpen())
                <p class="information-text">
                    We are excited that you want to participate in NET! Please carefully review the information below
                    before filling out the registration form - we look forward to reading them.
                </p>

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

                <br>
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
                                        @php($open_date = App\Internal::first()->getAttribute('registration_open_date'))
                                        Registration opens on {{ Carbon\Carbon::createFromFormat('Y-m-d', $open_date)->format('F jS, Y')}}.
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
                                            <div class="input-field col s7 m9 l10">
                                                <i class="material-icons prefix white-text">email</i>
                                                <input id="email_update" name="email_update" type="email" class="white-text">
                                                <label for="email_update" class="white-text">Your Email</label>
                                            </div>
                                            <div class="input-field col s5 m3 l2">
                                                <button class="btn waves-effect waves-light" type="submit">Submit</button>
                                            </div>
                                        </form>
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
@endsection