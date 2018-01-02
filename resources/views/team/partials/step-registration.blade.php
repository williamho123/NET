<div class="card z-depth-5">
    <div class="card-content">
        <span class="card-title teal-text lighten-2">Registration Summary</span>
        <div class="row">
            <div class="col s6">
                <div class="input-field information-text">
                    <b>High School: </b> {{ $team->school }}
                </div>
                <div class="input-field information-text">
                    <b>Team Name: </b> {{ $team->team_name }}
                </div>
                <div class="input-field information-text">
                    <b>Team Captain Name: </b> {{ $registration->team_captain->name}}
                </div>
                <div class="input-field information-text">
                    <b>Advisor Name: </b> {{ $registration->advisor->name }}
                </div>
            </div>
            <div class="col s6">
                <div class="input-field center-align">
                    <br>
                    <div class="information-text">View your entire registration data</div>
                    <br>
                    <div>
                        <a href="{{ url('/team/registration') }}" class="btn waves-effect waves-light">View
                            <i class="material-icons right">pageview</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row information-text center-align">
            @if($team->waitlisted)
                <div class="amber-text darken-3">Your team has been waitlisted. We will notify you as soon as a spot opens up.</div>
            @elseif($team->rejected)
                <div class="red-text darken-2">Sorry, we are unable to accommodate you at NET this year. We will notify you of any changes.</div>
            @elseif($team->accepted)
                <div class="green-text lighten-2">Congratulations! We look forward to seeing you at NET this year.</div>
            @else
                <div class="blue-text darken-2">Please be patient, we are currently reviewing the information you provided us.</div>
            @endif
        </div>

    </div>
</div>