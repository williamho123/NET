@extends('layouts.app')

@section('title','Tournament')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12 m9 l10">
                <div id="general" class="section scrollspy">
                    <h3>The Tournament</h3>
                    <div class="card z-depth-5">
                        <div class="card-image">
                            <img class="image-fill" src="{{ asset('resources/pics/lakefill.jpg') }}">
                        </div>
                    </div>
                    <br>
                    <div class="center-align">
                        <h5 class="black-text">{{ getFormattedTournamentDate() }}</h5>
                        <h5 class="black-text">Northwestern University</h5>
                    </div>
                </div>

                <div id="location" class="section scrollspy card z-depth-5">
                    <div class="card-content">
                        <span class="card-title teal-text lighten-2">Location</span>
                        NET {{ getTournamentYear() }} will be taking place in the <b>Kellogg Global Hub</b> located at <i>2211 Campus Dr., Evanston IL 60208.</i>.
                        A map of Northwestern's Evanston campus can be found <a target="_blank" href="https://maps.northwestern.edu/evanston">here</a>.
                    </div>
                </div>

                <div id="parking" class="section scrollspy card z-depth-5">
                    <div class="card-content">
                        <span class="card-title teal-text lighten-2">Parking</span>
                        Parking is free for the duration of the competition. We recommend parking at one of these locations for a short walk
                        to the Global Hub:
                        <ul class="browser-default">
                            <li>Lot 105 (North Campus Parking Garage): 2311 N Campus Dr., Evanston IL 60208</li>
                            <li>Lot 118 (Garrett Evangelical Seminary): 2121 Sheridan Rd., Evanston IL 60201</li>
                            <li>Lot 122 (Cook Hall - East Lot): 2220 Campus Dr., Evanston IL 60208</li>
                        </ul>
                        Please refer to <a target="_blank" href="https://maps.northwestern.edu/evanston">this interactive map</a> to see where the lots are located.
                    </div>
                </div>

                <div id="food" class="section scrollspy card z-depth-5">
                    <div class="card-content">
                        <span class="card-title teal-text lighten-2">Food</span>
                        Lunch will be provided to all student participants and advisors on the day of the tournament. Please let us know ahead of time
                        if there are any allergies or dietary restrictions we should be aware of.
                    </div>
                </div>

                <div id="schedule" class="section scrollspy card z-depth-5">
                    <div class="card-content">
                        <span class="card-title teal-text lighten-2">Schedule</span>
                        <div class="row">
                            <div class="col s6 m3 offset-m3">9:00am-10:00am</div>
                            <div class="col s6 m4">Check-in</div>
                        </div>
                        <div class="row">
                            <div class="col s6 m3 offset-m3">10:00am-10:15am</div>
                            <div class="col s6 m4">Welcome & Introductions</div>
                        </div>
                        <div class="row">
                            <div class="col s6 m3 offset-m3">10:15am-11:30am</div>
                            <div class="col s6 m4">Individual Exam</div>
                        </div>
                        <div class="row">
                            <div class="col s6 m3 offset-m3">11:30am-12:15pm</div>
                            <div class="col s6 m4">Professor Presentations</div>
                        </div>
                        <div class="row">
                            <div class="col s6 m3 offset-m3">12:15pm-1:15pm</div>
                            <div class="col s6 m4">Lunch</div>
                        </div>
                        <div class="row">
                            <div class="col s6 m3 offset-m3">1:15pm-3:30pm</div>
                            <div class="col s6 m4">Quiz Bowl</div>
                        </div>
                        <div class="row">
                            <div class="col s6 m3 offset-m3">3:30pm-4:00pm</div>
                            <div class="col s6 m4">Professor Presentation</div>
                        </div>
                        <div class="row">
                            <div class="col s6 m3 offset-m3">4:00pm-4:15pm</div>
                            <div class="col s6 m4">Prof. Witte Talk</div>
                        </div>
                        <div class="row">
                            <div class="col s6 m3 offset-m3">4:15pm-4:30pm</div>
                            <div class="col s6 m4">Closing & Awards</div>
                        </div>
                        <p class="center-align"><span style="color:#4db6ac;">&#10033;</span>Schedule based on last year's tournament. Subject to change.</p>
                        <p class="center-align"><span style="color:#4db6ac;">&#10033;&#10033;</span>Graduate students will be speaking during the quiz bowl. More details to follow.</p>
                    </div>
                </div>

                <div id="speakers" class="section scrollspy card z-depth-5">
                    <div class="card-content">
                        <span class="card-title teal-text lighten-2">Speakers</span>
                        <div class="row">
                            <div class="col s12 m4 offset-m2">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{ asset('resources/pics/witte.jpg') }}">
                                    </div>
                                    <div class="card-content center-align">
                                        <h6 class="black-text">Professor Mark Witte</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{ asset('resources/pics/ogawa.jpg') }}">
                                    </div>
                                    <div class="card-content center-align">
                                        <h6 class="black-text">Professor Scott Ogawa</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m4 offset-m2">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{ asset('resources/pics/hornsten.jpg') }}">
                                    </div>
                                    <div class="card-content center-align">
                                        <h6 class="black-text">Professor Jim Hornsten</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{ asset('resources/pics/reguant.jpg') }}">
                                    </div>
                                    <div class="card-content center-align">
                                        <h6 class="black-text">Professor Mar Reguant</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m4 offset-m2">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{ asset('resources/pics/loren.jpg') }}">
                                    </div>
                                    <div class="card-content center-align">
                                        <h6 class="black-text">Loren Fryxell</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{ asset('resources/pics/stephanie.jpg') }}">
                                    </div>
                                    <div class="card-content center-align">
                                        <h6 class="black-text">Stephanie Johnson</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m4 offset-m4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{ asset('resources/pics/pom.jpg') }}">
                                    </div>
                                    <div class="card-content center-align">
                                        <h6 class="black-text">Janjala (Pom) Chirakijja</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="practice" class="section scrollspy card z-depth-5">
                    <div class="card-content">
                        <span class="card-title teal-text lighten-2">Practice</span>
                        Below, you can find some sample questions similar to what you will see on the individual exam and quiz
                        bowl. Please let us know if you need any clarification or believe you have found a mistake.
                        <br><br>

                        <a target="_blank" href="{{ asset('resources/questions/2018_Individual_Exam_Practice_Questions.pdf') }}"><i class="material-icons">file_download</i>  Individual Exam Practice Questions </a>
                        <br><br>
                        <a target="_blank" href="{{ asset('resources/questions/2018_Quiz_Bowl_Practice_Questions.pdf') }}"><i class="material-icons">file_download</i>  Quiz Bowl Practice Questions </a>
                    </div>
                </div>

            </div>

            <div class="col hide-on-small-only m3 l2">
                <div class="toc-wrapper">
                    <ul class="section table-of-contents">
                        <li><a href="#general">General</a></li>
                        <li><a href="#location">Location</a></li>
                        <li><a href="#parking">Parking</a></li>
                        <li><a href="#food">Food</a></li>
                        <li><a href="#schedule">Schedule</a></li>
                        <li><a href="#speakers">Speakers</a></li>
                        <li><a href="#practice">Practice</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection