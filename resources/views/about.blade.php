@extends('layouts.app')

@section('title','About')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12 m9 l10">
                <div id="about" class="section scrollspy">
                    <h3>About NET</h3>
                    <div class="card z-depth-5">
                        <div class="card-image">
                            <img class="image-fill" src="{{ asset('resources/pics/net-group.jpg') }}">
                        </div>
                    </div>
                    <br>
                    <p>
                        Northwestern Economics Tournament (NET) is an annual event for high school students passionate about economics
                        and its applications.
                    </p>

                    <p>
                        Student competitors will be challenged on various economics principles at the AP Microeconomics and AP Macroeconomics levels as
                        well as on economic history, current events, and modern economic research through individual and team-based rounds.
                        Northwestern economics professors and graduate students will also give presentations and lectures in order to help students gain
                        a broader sense of what role economics plays in the world beyond the classroom. Students will have the chance to interact with
                        our distinguished faculty as well.
                    </p>

                    <blockquote>
                        Above all else, NET is a learning experience for students, so we encourage everyone interested to participate regardless of their
                        level of exposure to economics. The tournament is a great way to form friendships with peers who are also interested in economics
                        and to learn more about the field and its real-world applications in a college setting.
                    </blockquote>

                    <p>
                        The 2nd annual tournament will take place on <b>April 7th, 2018</b> at the Kellogg Global Hub. We would like to welcome all students
                        interested in learning more about economics to participate in the tournament! Please use the links below to learn more about the tournament
                        itself or to contact us if you have any questions.
                    </p>

                    <p>We look forward to seeing you in April!</p>

                    <div class="row">
                        <div class="input-field col">
                            <a href="{{ url('/tournament') }}" class="btn waves-effect waves-light">The Tournament
                                <i class="material-icons right">chrome_reader_mode</i>
                            </a>
                        </div>
                        <div class="input-field col">
                            <a href="{{ url('/rules') }}" class="btn waves-effect waves-light">Rules
                                <i class="material-icons right">book</i>
                            </a>
                        </div>
                        <div class="input-field col">
                            <a href="{{ url('/contact') }}" class="btn waves-effect waves-light">Contact Us
                                <i class="material-icons right">contact_mail</i>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="meet" class="section scrollspy">
                    <h3 class="teal-text text-lighten-2">Meet the Team</h3>

                    <p class="information-text">We are a team of undergraduate students at Northwestern University.</p>

                    <div class="row">
                        <div class="col m6">
                            <div class="card z-depth-5">
                                <div class="card-image">
                                    <img src="{{ asset('resources/pics/will.jpg') }}">
                                </div>
                                <div class="card-content">
                                    <h5 class="black-text">William Ho</h5>
                                    <p>William is a junior majoring in Economics and Computer Science.</p>
                                    <br>
                                    <p><b>Fun Fact: </b> I once played basketball with Jeremy Lin but (sadly) don't have a picture.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col m6">
                            <div class="card z-depth-5">
                                <div class="card-image">
                                    <img src="{{ asset('resources/pics/jackie.jpg') }}">
                                </div>
                                <div class="card-content">
                                    <h5 class="black-text">Jacqueline Wu</h5>
                                    <p>Jacqueline is a junior majoring in Economics and Statistics. </p>
                                    <br>
                                    <p><b>Fun Fact: </b> I once played in a chamber orchestra on the set of Glee!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m6">
                            <div class="card z-depth-5">
                                <div class="card-image">
                                    <img src="{{ asset('resources/pics/pete.jpg') }}">
                                </div>
                                <div class="card-content">
                                    <h5 class="black-text">Peter Nam</h5>
                                    <p>Peter is a junior majoring in Economics, Computer Science, and MMSS.</p>
                                    <br>
                                    <p><b>Fun Fact: </b> I actually preferred to use Bing over Google for a period of time.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col m6">
                            <div class="card z-depth-5">
                                <div class="card-image">
                                    <img src="{{ asset('resources/pics/clarissa.jpg') }}">
                                </div>
                                <div class="card-content">
                                    <h5 class="black-text">Clarissa Qian</h5>
                                    <p>Clarissa is a sophomore majoring in Economics and Computer Science.</p>
                                    <br>
                                    <p><b>Fun Fact: </b> I physically lose my voice at least 2 to 3 times a year.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m6">
                            <div class="card z-depth-5">
                                <div class="card-image">
                                    <img src="{{ asset('resources/pics/hongrui.jpg') }}">
                                </div>
                                <div class="card-content">
                                    <h5 class="black-text">Hongrui He</h5>
                                    <p>Hongrui is a freshman majoring in Economics and Math.</p>
                                    <br>
                                    <p><b>Fun Fact: </b> I love photopgrahy and often take my camera with me!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col m6">
                            <div class="card z-depth-5">
                                <div class="card-image">
                                    <img src="{{ asset('resources/pics/tyler.jpg') }}">
                                </div>
                                <div class="card-content">
                                    <h5 class="black-text">Tyler Huang</h5>
                                    <p>Tyler is a freshman majoring in Economics and Computer Science.</p>
                                    <br>
                                    <p><b>Fun Fact: </b> I waited 3 hours to eat at a Michelin-starred ramen restaurant in Japan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col hide-on-small-only m3 l2">
                <div class="toc-wrapper">
                    <ul class="section table-of-contents">
                        <li><a href="#about">About NET</a></li>
                        <li><a href="#meet">Meet the Team</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection