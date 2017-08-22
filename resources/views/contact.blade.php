@extends('layouts.app')

@section('title','Contact')

@section('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection

@section('content')

    <div class="container">
        <div class="section">
            <h3>Contact Us</h3>
            <p class="information-text">
                Thank you for your interest in NET! Check out our FAQ below, and please fill out the form below if you have any other questions.
            </p>

            <div class="col s12 m6">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">help</i> FAQ</div>
                        <div class="collapsible-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>


            <br>
            <div class="divider"></div>
            <br>

            <div class="row">
                <form id="contactform" class="col s12" method="POST" action="{{ url('/contact') }}">

                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" name="first_name" type="text">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" name="last_name" type="text">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="subject" name="subject" type="text">
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="message" name="message" class="materialize-textarea" data-length="1500"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('errors.modal')

@endsection