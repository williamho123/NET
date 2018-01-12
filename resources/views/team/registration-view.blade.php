@extends('layouts.team')

@section('title', 'Registration')

@section('content')
    <div class="container">
        <div class="section">

            <br>
            <div class="information-text">
                Below is all the registration data you have provided us. If you would like to make any changes, please email
                us at <a href="mailto:nuecontournament@gmail.com">nuecontournament@gmail.com</a> with the additional information.
            </div>

            <br>
            <div class="divider"></div>
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
    </div>

@endsection