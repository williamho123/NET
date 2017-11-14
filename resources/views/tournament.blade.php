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
                        <h5 class="black-text">April 7th, 2018</h5>
                        <h5 class="black-text">Northwestern University</h5>
                    </div>
                </div>

                <div id="location" class="section scrollspy">
                    <h5>Location</h5>
                    <p>
                        NET 2018 will be taking place in the <b>Kellogg Global Hub</b> located at <i>2211 Campus Dr., Evanston IL 60208.</i>.
                        A map of Northwestern's Evanston campus can be found <a target="_blank" href="https://maps.northwestern.edu/evanston">here</a>.
                    </p>
                </div>

                <div id="parking" class="section scrollspy">
                    <h5>Parking</h5>
                    <p>
                        Parking is free for the duration of the competition. We recommend parking at one of these locations for a short walk
                        to the Global Hub:
                        <br><br>
                        Lot 105 (North Campus Parking Garage): 2311 N Campus Dr., Evanston IL 60208<br>
                        Lot 118 (Garrett Evangelical Seminary): 2121 Sheridan Rd., Evanston IL 60201<br>
                        Lot 122 (Cook Hall - East Lot): 2220 Campus Dr., Evanston IL 60208<br><br>
                        Please refer to <a target="_blank" href="https://maps.northwestern.edu/evanston">this interactive map</a> to see where the lots are located.
                    </p>
                </div>

                <div id="food" class="section scrollspy">
                    <h5>Food</h5>
                    <p>
                        Lunch will be provided to all student participants and advisors on the day of the tournament. Please let us know ahead of time
                        if there are any allergies or dietary restrictions we should be aware of.
                    </p>
                </div>

                <div id="schedule" class="section scrollspy">
                    <h5>Schedule</h5>
                    <br>
                    <div class="row">
                        <div class="col s3 offset-s3">9:30am-10:00am</div>
                        <div class="col s4">Check-in</div>

                        <div class="pad"></div>

                        <div class="col s3 offset-s3">10:00am-10:15am</div>
                        <div class="col s4">Welcome & Introductions</div>

                        <div class="pad"></div>

                        <div class="col s3 offset-s3">10:15am-11:30am</div>
                        <div class="col s4">Individual Exam</div>

                        <div class="pad"></div>

                        <div class="col s3 offset-s3">11:30am-12:00pm</div>
                        <div class="col s4">Professor Presentations</div>

                        <div class="pad"></div>

                        <div class="col s3 offset-s3">12:00pm-1:30pm</div>
                        <div class="col s4">Lunch</div>

                        <div class="pad"></div>

                        <div class="col s3 offset-s3">1:30pm-3:30pm</div>
                        <div class="col s4">Quiz Bowl</div>

                        <div class="pad"></div>

                        <div class="col s3 offset-s3">3:30pm-4:00pm</div>
                        <div class="col s4">Grad Student Presentations</div>

                        <div class="pad"></div>

                        <div class="col s3 offset-s3">4:00pm-4:15pm</div>
                        <div class="col s4">Prof. Christiano Talk</div>

                        <div class="pad"></div>

                        <div class="col s3 offset-s3">4:15pm-4:45pm</div>
                        <div class="col s4">Closing & Awards</div>
                    </div>
                    <p class="center-align"><span style="color:#4db6ac;">&#10033;</span>Schedule based on last year's tournament. Subject to change.</p>
                </div>

                <div id="speakers" class="section scrollspy">
                    <h5>Speakers</h5>
                    <p>Speakers at NET 2018 will be posted soon.</p>
                </div>

                <div id="practice" class="section scrollspy">
                    <h5>Practice</h5>
                    <p>
                        Below, you can find some sample questions similar to what you will see on the individual exam and quiz
                        bowl. Please let us know if you need any clarification or believe you have found a mistake.
                    </p>

                    <a target="_blank" href="{{ asset('resources/questions/2018_Individual_Exam_Practice_Questions.pdf') }}"><i class="material-icons">file_download</i>  Individual Exam Practice Questions </a>
                    <br><br>
                    <a target="_blank" href="{{ asset('resources/questions/2018_Quiz_Bowl_Practice_Questions.pdf') }}"><i class="material-icons">file_download</i>  Quiz Bowl Practice Questions </a>
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