@extends('layouts.app')

@section('title','Contact')

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
                                <strong>Is previous economics knowledge needed to participate in NET?</strong><br>
                                While some previous economics knowledge is needed to participate, the tournament itself is a valuable learning
                                experience, so we encourage all students regardless of their level of exposure in economics to attend! Presentations
                                from Northwestern faculty are also a great way for students interested in economics to see the tools they've learned
                                in the classroom applied to many different real-world problems. <br><br>

                                <strong>What is the structure of the tournament?</strong><br>
                                NET is divided into two rounds: an individual round and a team round. During the individual round, students will take
                                a multiple choice exam featuring a variety of economics topics. The team round is a quiz-bowl style event where students
                                work as teams to answer trivia based economics questions against other teams. See the <a href="{{ url('/rules') }}">rules</a>
                                page for a breakdown of the topics and more information about tournament structure.<br><br>

                                <strong>Do we have to pay to attend NET?</strong><br>
                                NET 2018 is free! We want students to come enjoy the tournament and learn without the need for an application fee.
                                <br><br>

                                <strong>Are there any practice resources to prepare for NET?</strong><br>
                                Take a look at our <a href="{{ url('/tournament') }}">tournament</a> page and scroll all the way down to find sample
                                questions for both the individual exam and quiz bowl. Question difficulty should be approximately the same this year. <br><br>

                                <strong>What if I'm home-schooled?</strong><br>
                                We would still love for you to attend! Please try to join a team from a high school around you or form a separate team.
                                Let us know if you need help forming or finding a team. <br><br>

                                <strong>Do we get any swag at NET?</strong><br>
                                All NET participants and their advisors will receive a T-shirt.

                            </p>
                        </div>
                    </li>
                </ul>
            </div>


            <br>
            <div class="divider"></div>
            <br>

            <div class="row">
                <form id="contact-form" class="col s12" method="POST" action="{{ url('/contact') }}">

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
@endsection