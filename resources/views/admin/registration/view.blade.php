@extends('layouts.admin')

@section('title', 'View Registration')

@section('scripts')
    <script src="{{ asset('js/link-http-request.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <br>
        <h4>Team {{ $team->team_id_code }}</h4>
        <div class="divider"></div>

        <br>

        <div class="card z-depth-5">
            <div class="card-content">
                <span class="card-title teal-text lighten-2">Actions</span>

                <div class="row">
                    <div class="input-field col m2 information-text">
                        <b>Auxiliary</b>
                    </div>
                    <div class="input-field col">
                        <a href="{{ action('AdminController@editRegistration', [$team->id]) }}" class="btn waves-effect waves-light blue darken-2">Edit
                            <i class="material-icons right">create</i>
                        </a>
                    </div>
                    <div class="input-field col">
                        <a href="{{ action('AdminController@deleteRegistration', [$team->id]) }}" class="btn waves-effect waves-light red darken-2" data-method="DELETE"
                           data-confirm="Are you sure you want to delete this team?" data-redirect="{{ url('/admin/registrations') }}">Delete <i class="material-icons right">cancel</i></a>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col m2 information-text">
                        <b>Decision</b>
                    </div>
                    <div class="input-field col">
                        <a href="{{ action('AdminController@acceptRegistration', [$team->id]) }}" class="btn waves-effect waves-light green lighten-2" data-method="PUT" data-redirect="{{ url('/admin/registrations') }}"
                            {{ $team->accepted ? 'disabled' : '' }}>Accept<i class="material-icons right">check_circle</i>
                        </a>
                    </div>
                    <div class="input-field col">
                        <a href="{{ action('AdminController@waitlistRegistration', [$team->id]) }}" class="btn waves-effect waves-light amber darken-3" data-method="PUT" data-redirect="{{ url('/admin/registrations') }}"
                                {{ $team->waitlisted ? 'disabled' : '' }}>Waitlist
                            <i class="material-icons right">timer</i>
                        </a>
                    </div>
                    <div class="input-field col">
                        <a href="{{ action('AdminController@rejectRegistration', [$team->id]) }}" class="btn waves-effect waves-light red darken-2" data-method="PUT" data-redirect="{{ url('/admin/registrations') }}"
                                {{ $team->rejected ? 'disabled' : '' }}>Reject
                            <i class="material-icons right">cancel</i>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col m2 information-text">
                        <b>Waivers</b>
                    </div>
                    <div class="input-field col">
                        <a href="{{ action('AdminController@viewWaivers', [$team->id]) }}" class="btn waves-effect waves-light blue darken-2" {{ !$team->forms ? 'disabled' : '' }}>View
                            <i class="material-icons right">remove_red_eye</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="information-text">
            <b>Submitted On: </b> {{ \Carbon\Carbon::parse($team->created_at)->format('F jS, Y | g:i A') }} <br>
            <b>Last Updated At: </b> {{ \Carbon\Carbon::parse($team->updated_at)->format('F jS, Y | g:i A') }} <br>
            <b>Waiver Deadline: </b> {{ $team->forms_deadline ? \Carbon\Carbon::parse($team->forms_deadline)->format('F jS, Y') : 'N/A' }}
        </div>

        <br>

        <h5>General Information</h5>
        <div class="row">
            <div class="input-field col s12">
                <input id="school" type="text" value="{{ $team->school }}" disabled>
                <label for="school">High School Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="team_name" type="text" value="{{ $team->team_name }}" disabled>
                <label for="team_name">Team Name</label>
            </div>
        </div>

        <br>

        <h5>Team Captain</h5>
        <div class="row">
            <div class="input-field col s6">
                <input id="team_captain_name" type="text" value="{{ $registration->team_captain->name }}" disabled>
                <label for="team_captain_name">Name</label>
            </div>
            <div class="input-field col s6">
                <select id="team_captain_grade" disabled>
                    <option value="" disabled>Select an year</option>
                    <option value="Freshman" {{ ($registration->team_captain->grade == 'Freshman') ? 'selected' : '' }}>Freshman</option>
                    <option value="Sophomore" {{ ($registration->team_captain->grade == 'Sophomore') ? 'selected' : '' }}>Sophomore</option>
                    <option value="Junior" {{ ($registration->team_captain->grade == 'Junior') ? 'selected' : '' }}>Junior</option>
                    <option value="Senior" {{ ($registration->team_captain->grade == 'Senior') ? 'selected' : '' }}>Senior</option>
                </select>
                <label for="team_captain_grade">Grade Level</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="team_captain_email" type="email" value="{{ $registration->team_captain->email }}" disabled>
                <label for="team_captain_email">Email</label>
            </div>
        </div>

        <br>

        <h5>Team Member 1</h5>
        <div class="row">
            <div class="input-field col s6">
                <input id="team_member_1_name" type="text" value="{{ $registration->team_member_1->name }}" disabled>
                <label for="team_member_1_name">Name</label>
            </div>
            <div class="input-field col s6">
                <select id="team_member_1_grade" disabled>
                    <option value="" disabled>Select an year</option>
                    <option value="Freshman" {{ ($registration->team_member_1->grade == 'Freshman') ? 'selected' : '' }}>Freshman</option>
                    <option value="Sophomore" {{ ($registration->team_member_1->grade == 'Sophomore') ? 'selected' : '' }}>Sophomore</option>
                    <option value="Junior" {{ ($registration->team_member_1->grade == 'Junior') ? 'selected' : '' }}>Junior</option>
                    <option value="Senior" {{ ($registration->team_member_1->grade == 'Senior') ? 'selected' : '' }}>Senior</option>
                </select>
                <label for="team_member_1_grade">Grade Level</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="team_member_1_email" type="email" value="{{ $registration->team_member_1->email }}" disabled>
                <label for="team_member_1_email">Email</label>
            </div>
        </div>

        <br>

        <h5>Team Member 2</h5>
        <div class="row">
            <div class="input-field col s6">
                <input id="team_member_2_name" type="text" value="{{ $registration->team_member_2->name }}" disabled>
                <label for="team_member_2_name">Name</label>
            </div>
            <div class="input-field col s6">
                <select id="team_member_2_grade" disabled>
                    <option value="" disabled>Select an year</option>
                    <option value="Freshman" {{ ($registration->team_member_2->grade == 'Freshman') ? 'selected' : '' }}>Freshman</option>
                    <option value="Sophomore" {{ ($registration->team_member_2->grade == 'Sophomore') ? 'selected' : '' }}>Sophomore</option>
                    <option value="Junior" {{ ($registration->team_member_2->grade == 'Junior') ? 'selected' : '' }}>Junior</option>
                    <option value="Senior" {{ ($registration->team_member_2->grade == 'Senior') ? 'selected' : '' }}>Senior</option>
                </select>
                <label for="team_member_2_grade">Grade Level</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="team_member_2_email" type="email" value="{{ $registration->team_member_2->email }}" disabled>
                <label for="team_member_2_email">Email</label>
            </div>
        </div>

        <br>

        <h5>Team Member 3</h5>
        <div class="row">
            <div class="input-field col s6">
                <input id="team_member_3_name" type="text" value="{{ $registration->team_member_3->name }}" disabled>
                <label for="team_member_3_name">Name</label>
            </div>
            <div class="input-field col s6">
                <select id="team_member_3_grade" disabled>
                    <option value="" disabled>Select an year</option>
                    <option value="Freshman" {{ ($registration->team_member_3->grade == 'Freshman') ? 'selected' : '' }}>Freshman</option>
                    <option value="Sophomore" {{ ($registration->team_member_3->grade == 'Sophomore') ? 'selected' : '' }}>Sophomore</option>
                    <option value="Junior" {{ ($registration->team_member_3->grade == 'Junior') ? 'selected' : '' }}>Junior</option>
                    <option value="Senior" {{ ($registration->team_member_3->grade == 'Senior') ? 'selected' : '' }}>Senior</option>
                </select>
                <label for="team_member_3_grade">Grade Level</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="team_member_3_email" type="email" value="{{ $registration->team_member_3->email }}" disabled>
                <label for="team_member_3_email">Email</label>
            </div>
        </div>

        <br>

        <h5>Advisor</h5>
        <div class="row">
            <div class="input-field col s12">
                <input id="advisor_name" type="text" value="{{ $registration->advisor->name }}" disabled>
                <label for="advisor_name">Advisor Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="advisor_email" type="email" value="{{ $registration->advisor->email }}" disabled>
                <label for="advisor_email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="advisor_subject" type="text" value="{{ $registration->advisor->relationship }}" disabled>
                <label for="advisor_subject">Relationship to Participants</label>
            </div>
        </div>

        <br>

        <h5>Mobile Phone Numbers</h5>
        <div class="row">
            <div class="input-field col s12">
                <input id="team_captain_number" type="tel" value="{{ $registration->numbers->team_captain }}" disabled>
                <label for="team_captain_number">Team Captain Number</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="advisor_number" type="tel" value="{{ $registration->numbers->advisor }}" disabled>
                <label for="advisor_number">Advisor Number</label>
            </div>
        </div>

        <br>

        <h5>Economics Experience</h5>
        <p class="information-text">Has any team member had previous exposure to economics (e.g. coursework, activities, etc.) ?</p>
        <div class="row">
            <div class="switch">
                <label>
                    No
                    <input id="econ_back" type="checkbox" {{ ($registration->econ_exp == 'true') ? 'checked' : '' }} disabled>
                    <span class="lever"></span>
                    Yes
                </label>
            </div>
        </div>

        <br>

        <div>
            <p class="information-text">Please elaborate on economics background (e.g. which courses, what setting, etc.).</p>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="econ_exp" class="materialize-textarea" data-length="1500" disabled>{{ $registration->econ_back }}</textarea>
                    <label for="econ_exp">Economics Experience</label>
                </div>
            </div>
        </div>

        <br>

        <h5>Short Answer</h5>
        <p class="information-text">What do you and your team hope to get out of NET?</p>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="why_net" class="materialize-textarea" data-length="1500" disabled>{{ $registration->short_answer }}</textarea>
                <label for="why_net">Enter Response</label>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('select').material_select();
    </script>
@endsection