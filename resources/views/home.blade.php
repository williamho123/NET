@extends('layouts.app')

@section('title','Home')

@section('content')
    <div id="index-banner" class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h2 class="header center white-text">Northwestern Economics Tournament</h2>
                <div class="row center">
                    <h5 class="header col s12 blue-grey-text text-lighten-4">
                        The Chicago area's premier economics competition for high school students
                    </h5>
                </div>
                <div class="row center">
                    <a href="{{ url('/about') }}" class="btn-large waves-effect waves-light teal lighten-1">Learn More</a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="{{ asset('resources/pics/northwestern-arch.png') }}"></div>
    </div>

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">av_timer</i></h2>
                        <h5 class="center black-text">A Day of Challenges</h5>
                        <p class="light">In teams of 4, students challenge themselves against other teams in individual and quiz-bowl based rounds that test their economics knowledge. Students also have the chance to hear from and interact with distinguished Northwestern faculty.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">redeem</i></h2>
                        <h5 class="center black-text">Cash Prizes</h5>
                        <p class="light">Student participants have the opportunity to win cash prizes! The top-placing individual and team in the respective rounds will receive cash prizes as well as certificates recognizing their achievements at NET.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">group</i></h2>
                        <h5 class="center black-text">Learning Community</h5>
                        <p class="light">We welcome everyone to participate in NET regardless of their level of exposure to economics. The tournament is a learning community where students with all levels of economics experience gather to further their knowledge together.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h4 class="header col s12 white-text">{{ getFormattedTournamentDate() }} - Kellogg Global Hub</h4>
                </div>
                <div class="row center">
                    <a href="{{ url('/registration') }}" class="btn-large waves-effect waves-light teal lighten-1">Register Now</a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="{{ asset('resources/pics/kellogg.png') }}"></div>
    </div>
@endsection