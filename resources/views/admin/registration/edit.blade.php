@extends('layouts.admin')

@section('title', 'Edit Registration')

@section('scripts')
    <script src="{{ asset('js/link-http-request.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <br>
        <h4>Team {{ $team->team_id_code }}</h4>
        <div class="divider"></div>
        <br>

        <div class="information-text amber-text darken-3">
            WARNING: No data validation is executed when updating the form - please double check all fields before submitting.
        </div>

        <br>

        <div class="information-text">
            <b>Submitted On: </b> {{ \Carbon\Carbon::parse($team->created_at)->format('F jS, Y | g:i A') }} <br>
            <b>Updated At: </b> {{ \Carbon\Carbon::parse($team->updated_at)->format('F jS, Y | g:i A') }} <br>
            <b>Waiver Deadline: </b> {{ $team->forms_deadline ? \Carbon\Carbon::parse($team->forms_deadline)->format('F jS, Y') : 'N/A' }}
        </div>

        <br>

        <form id="edit_form">

            {{ method_field('PUT') }}

            <h5>General Information</h5>
            <div class="row">
                <div class="input-field col s12">
                    <input id="school" name="school_name" type="text" value="{{ $team->school }}">
                    <label for="school">High School Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="team_name" name="team_name" type="text" value="{{ $team->team_name }}">
                    <label for="team_name">Team Name</label>
                </div>
            </div>

            <br>

            <h5>Team Captain</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_captain_name" name="team_captain_name" type="text" value="{{ $registration->team_captain->name }}">
                    <label for="team_captain_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_captain_grade" name="team_captain_grade">
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
                    <input id="team_captain_email" name="team_captain_email" type="email" value="{{ $registration->team_captain->email }}">
                    <label for="team_captain_email">Email</label>
                </div>
            </div>

            <br>

            <h5>Team Member 1</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_member_1_name" name="team_member_1_name" type="text" value="{{ $registration->team_member_1->name }}">
                    <label for="team_member_1_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_member_1_grade" name="team_member_1_grade">
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
                    <input id="team_member_1_email" name="team_member_1_email" type="email" value="{{ $registration->team_member_1->email }}">
                    <label for="team_member_1_email">Email</label>
                </div>
            </div>

            <br>

            <h5>Team Member 2</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_member_2_name" name="team_member_2_name" type="text" value="{{ $registration->team_member_2->name }}">
                    <label for="team_member_2_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_member_2_grade" name="team_member_2_grade">
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
                    <input id="team_member_2_email" name="team_member_2_email" type="email" value="{{ $registration->team_member_2->email }}">
                    <label for="team_member_2_email">Email</label>
                </div>
            </div>

            <br>

            <h5>Team Member 3</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_member_3_name" name="team_member_3_name" type="text" value="{{ $registration->team_member_3->name }}">
                    <label for="team_member_3_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_member_3_grade" name="team_member_3_grade">
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
                    <input id="team_member_3_email" name="team_member_3_email" type="email" value="{{ $registration->team_member_3->email }}">
                    <label for="team_member_3_email">Email</label>
                </div>
            </div>

            <br>

            <h5>Advisor</h5>
            <div class="row">
                <div class="input-field col s12">
                    <input id="advisor_name" name="advisor_name" type="text" value="{{ $registration->advisor->name }}">
                    <label for="advisor_name">Advisor Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="advisor_email" name="advisor_email" type="email" value="{{ $registration->advisor->email }}">
                    <label for="advisor_email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="advisor_subject" name="advisor_relationship" type="text" value="{{ $registration->advisor->relationship }}">
                    <label for="advisor_subject">Relationship to Participants</label>
                </div>
            </div>

            <br>

            <h5>Mobile Phone Numbers</h5>
            <div class="row">
                <div class="input-field col s12">
                    <input id="team_captain_number" name="team_captain_number" type="tel" value="{{ $registration->numbers->team_captain }}">
                    <label for="team_captain_number">Team Captain Number</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="advisor_number" name="advisor_number" type="tel" value="{{ $registration->numbers->advisor }}">
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
                        <input id="econ_back" name="checked" type="checkbox" {{ ($registration->econ_exp == 'true') ? 'checked' : '' }}>
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
                        <textarea id="econ_exp" name="economics_experience" class="materialize-textarea" data-length="1500">{{ $registration->econ_back }}</textarea>
                        <label for="econ_exp">Economics Experience</label>
                    </div>
                </div>
            </div>

            <br>

            <h5>Short Answer</h5>
            <p class="information-text">What do you and your team hope to get out of NET?</p>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="why_net" name="short_answer" class="materialize-textarea" data-length="1500">{{ $registration->short_answer }}</textarea>
                    <label for="why_net">Enter Response</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Update
                        <i class="material-icons right">update</i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        $('select').material_select();

        let form = $('#edit_form');
        form.submit(function(e) {
            e.preventDefault();

            $.post('/admin/registrations/' + {{ $team->id }} + '/update', form.serializeArray()).fail(function(data) {
                handleErrors(data)
            }).done(function() {
                swal({
                    title: "Updated!",
                    text: "The team's registration info was successfully updated.",
                    type: "success",
                    confirmButtonColor: "#4db6ac"
                }, () => {
                    window.location.href = "{{ action('AdminController@viewRegistration', [$team->id]) }}"
                });
            });
        })
    </script>
@endsection