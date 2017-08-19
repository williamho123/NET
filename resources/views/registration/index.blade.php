@extends('layouts.app')

@section('title','Registration')

@section('content')
    <div class="container">
        <div class="section">
            <h3>Registration</h3>
            <p class="information-text">
                We are excited that you want to participate in NET! Please carefully review the information below
                before starting on the application - we look forward to reading them.
            </p>

            <div class="row">
                <div class="col s12">
                    <div class="card blue-grey lighten-1 z-depth-5">
                        <div class="card-content white-text">
                            <span class="card-title">Application Process</span>
                            <ul class="browser-default">
                                <li>After submitting the application, you will receive a confirmation email with your team's unique ID code and password.</li>
                                <li>Use these credentials to track the status of your application through the portal under app status.</li>
                                <li>Once your application has been accepted, you may use the portal to pay the registration fee through PayPal and upload tournament waivers for students and the advisor.</li>
                                <li>You will have 5 business days to complete those two tasks. Otherwise, your spot may be given to another team on the waitlist.</li>
                                <li>Your portal will reflect a completed status when all steps have been completed. A confirmation email will also be sent.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m4">
                    <div class="card blue-grey lighten-1 z-depth-5">
                        <div class="card-content white-text">
                            <span class="card-title">General Policies</span>
                            <ul class="browser-default">
                                <li>Hard cap of 16 teams.</li>
                                <li>Waitlist with 8 spots.</li>
                                <li>Registration is on a <b>first-come, first-served</b> basis.</li>
                                <li>$20 registration fee per team.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey lighten-1 z-depth-5">
                        <div class="card-content white-text">
                            <span class="card-title">Team Policies</span>
                            <ul class="browser-default">
                                <li>Each team must consist of 4 students (grades 9-12).</li>
                                <li>Each school must have a parent/faculty advisor accompanying.</li>
                                <li>Max 1 team per school.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card blue-grey lighten-1 z-depth-5">
                        <div class="card-content white-text">
                            <span class="card-title">Other Policies</span>
                            <ul class="browser-default">
                                <li>Registration fee will NOT be refunded in the event of cancellation.</li>
                                <li>Exceptions are granted for emergencies. Contact us for more details.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

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

        </div>
    </div>
@endsection