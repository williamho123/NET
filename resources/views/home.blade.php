@extends('layouts.app')

@section('title','Home')

@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center white-text">Northwestern Economics Tournament</h1>
                <div class="row center">
                    <h5 class="header col s12 blue-grey-text text-lighten-4">
                        The Chicago area's premier economics competition for high school students
                    </h5>
                </div>
                <div class="row center">
                    <a href="{{ url('/about') }}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Learn More</a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="resources/pics/northwestern-arch.png"></div>
    </div>

    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">av_timer</i></h2>
                        <h5 class="center">A Day of Activities</h5>
                        <p class="light">In teams of 4, students challenge themselves against other teams in individual and quiz-bowl based rounds that test their economics knowledge. Students will also have the chance to hear from and interact with Northwestern professors and graduate students.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">redeem</i></h2>
                        <h5 class="center">Cash Prizes</h5>
                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu dictum magna. Sed sed tempor purus. In vitae blandit turpis, et fringilla justo. Duis ligula.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">Passion for Learning</h5>
                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu dictum magna. Sed sed tempor purus. In vitae blandit turpis, et fringilla justo. Duis ligula.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h4 class="header col s12 white-text">April 7th, 2018 - Kellogg Global Hub</h4>
                </div>
                <div class="row center">
                    <a href="{{ url('/logistics') }}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">About the Competition</a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="resources/pics/kellogg.png"></div>
    </div>

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Random Heading</h4>
                    <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>

        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h4 class="header col s12 white-text">Sign up for the tournament today!</h4>
                </div>
                <div class="row center">
                    <a href="{{ url('/registration') }}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Register Now</a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="resources/pics/skyline.png"></div>
    </div>
@endsection