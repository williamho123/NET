@extends('layouts.app')

@section('title', 'Registration')

@section('scripts')
    <script src="{{ asset('js/lib/jquery.formatter.min.js') }}"></script>
    <script src="{{ asset('js/registration-create.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <h3>NET Registration Form</h3>
            <p class="information-text red-text">
                All fields are required.
            </p>

            <br>

            <div class="row">
                <form id="register-form" class="col s12" method="POST" action="{{ url('/registration') }}">

                    {{ csrf_field() }}

                    <div class="form-section">
                        <h5>Team Captain</h5>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="team_captain_first_name" name="team_captain_first_name" type="text">
                                <label for="team_captain_first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="team_captain_last_name" name="team_captain_last_name" type="text">
                                <label for="team_captain_last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="team_captain_email" name="team_captain_email" type="email">
                                <label for="team_captain_email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select id="team_captain_grade" name="team_captain_grade">
                                    <option value="" disabled selected>Select an year</option>
                                    <option value="Freshman">Freshman</option>
                                    <option value="Sophomore">Sophomore</option>
                                    <option value="Junior">Junior</option>
                                    <option value="Senior">Senior</option>
                                </select>
                                <label for="team_captain_grade">Grade Level</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-section">
                        <h5>Team Member 1</h5>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="team_member_1_first_name" name="team_member_1_first_name" type="text">
                                <label for="team_member_1_first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="team_member_1_last_name" name="team_member_1_last_name" type="text">
                                <label for="team_member_1_last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="team_member_1_email" name="team_member_1_email" type="email">
                                <label for="team_member_1_email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select id="team_member_1_grade" name="team_member_1_grade">
                                    <option value="" disabled selected>Select an year</option>
                                    <option value="Freshman">Freshman</option>
                                    <option value="Sophomore">Sophomore</option>
                                    <option value="Junior">Junior</option>
                                    <option value="Senior">Senior</option>
                                </select>
                                <label for="team_member_1_grade">Grade Level</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-section">
                        <h5>Team Member 2</h5>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="team_member_2_first_name" name="team_member_2_first_name" type="text">
                                <label for="team_member_2_first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="team_member_2_last_name" name="team_member_2_last_name" type="text">
                                <label for="team_member_2_last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="team_member_2_email" name="team_member_2_email" type="email">
                                <label for="team_member_2_email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select id="team_member_2_grade" name="team_member_2_grade">
                                    <option value="" disabled selected>Select an year</option>
                                    <option value="Freshman">Freshman</option>
                                    <option value="Sophomore">Sophomore</option>
                                    <option value="Junior">Junior</option>
                                    <option value="Senior">Senior</option>
                                </select>
                                <label for="team_member_2_grade">Grade Level</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-section">
                        <h5>Team Member 3</h5>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="team_member_3_first_name" name="team_member_3_first_name" type="text">
                                <label for="team_member_3_first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="team_member_3_last_name" name="team_member_3_last_name" type="text">
                                <label for="team_member_3_last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="team_member_3_email" name="team_member_3_email" type="email">
                                <label for="team_member_3_email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select id="team_member_3_grade" name="team_member_3_grade">
                                    <option value="" disabled selected>Select an year</option>
                                    <option value="Freshman">Freshman</option>
                                    <option value="Sophomore">Sophomore</option>
                                    <option value="Junior">Junior</option>
                                    <option value="Senior">Senior</option>
                                </select>
                                <label for="team_member_3_grade">Grade Level</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-section">
                        <h5>Advisor</h5>
                        <p>Must be a teacher or parent/guardian aged 25 years or older.</p>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="advisor_first_name" name="advisor_first_name" type="text">
                                <label for="advisor_first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="advisor_last_name" name="advisor_last_name" type="text">
                                <label for="advisor_last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="advisor_email" name="advisor_email" type="email">
                                <label for="advisor_email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="advisor_subject" name="advisor_subject" type="text">
                                <label for="advisor_subject">Subject Taught/Relationship to Participants</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-section">
                        <h5>High School Information</h5>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="school" name="school" type="text">
                                <label for="school">High School Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="school_city" name="school_city" type="text">
                                <label for="school_city">City</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-section">
                        <h5>Mobile Phone Numbers</h5>
                        <p>This information will only be used in the event we need to contact you the day of the tournament.</p>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="team_captain_number" name="team_captain_number" type="text">
                                <label for="team_captain_number">Team Captain Number</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="advisor_number" name="advisor_number" type="text">
                                <label for="advisor_number">Advisor Number</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-section">
                        <h5>Economics Experience</h5>
                        <p class="information-text">Has any team member had previous exposure to economics (e.g. coursework, activities, etc.)?</p>
                        <div class="row">
                            <div class="switch">
                                <label>
                                    No
                                    <input id="econ_back" name="econ_back" type="checkbox">
                                    <span class="lever"></span>
                                    Yes
                                </label>
                            </div>
                        </div>
                        <br>
                        <div id="econ_exp_div" hidden>
                            <p class="information-text">Please elaborate on economics background (e.g. which courses, what setting, etc.).</p>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="econ_exp" name="econ_exp" class="materialize-textarea" data-length="1500"></textarea>
                                    <label for="econ_exp">Economics Experience</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-section">
                        <h5>Short Answer Question</h5>
                        <p class="information-text">What do you and your team hope to get out of NET?</p>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="why_net" name="why_net" class="materialize-textarea" data-length="1500"></textarea>
                                <label for="why_net">Enter Response</label>
                            </div>
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