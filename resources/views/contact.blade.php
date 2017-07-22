@extends('layouts.app')

@section('title','Contact')

@section('content')

    <div class="container">
        <div class="section">
            <h3>Contact Us</h3>
            <p class="information-text">
                Thank you for your interest in NET! Please fill out the form below if you have any questions about the tournament,
                and we will get back to you as soon as possible.
            </p>

            <br>
            <div class="divider"></div>
            <br>

            <div class="row">
                <form class="col s12" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="subject" type="text" class="validate">
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea" data-length="1500"></textarea>
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
@endsection