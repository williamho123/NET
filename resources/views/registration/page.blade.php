@extends('layouts.app')

@section('title', 'Registration')

@section('content')
    <div class="container">
        <div class="section">
            <h3>NET Registration Form</h3>
            <p class="information-text">
                All fields are required.
            </p>

            <br>

            <div class="row">
                <form id="registerform" class="col s12" method="POST" action="{{ url('/registration') }}">

                    {{ csrf_field() }}

                    <div class="form-section">
                        <h5>Team Captain</h5>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="team_captain_first_name" name="team_captain_first_name" type="text" class="validate">
                                <label for="team_captain_first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="team_captain_last_name" name="team_captain_last_name" type="text" class="validate">
                                <label for="team_captain_last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="team_captain_email" name="team_captain_email" type="email" class="validate">
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
                                <input id="team_member_1_first_name" name="team_member_1_first_name" type="text" class="validate">
                                <label for="team_member_1_first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="team_member_1_last_name" name="team_member_1_last_name" type="text" class="validate">
                                <label for="team_member_1_last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="team_member_1_email" name="team_member_1_email" type="email" class="validate">
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
                                <input id="team_member_2_first_name" name="team_member_2_first_name" type="text" class="validate">
                                <label for="team_member_2_first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="team_member_2_last_name" name="team_member_2_last_name" type="text" class="validate">
                                <label for="team_member_2_last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="team_member_2_email" name="team_member_2_email" type="email" class="validate">
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
                                <input id="team_member_3_first_name" name="team_member_3_first_name" type="text" class="validate">
                                <label for="team_member_3_first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="team_member_3_last_name" name="team_member_3_last_name" type="text" class="validate">
                                <label for="team_member_3_last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="team_member_3_email" name="team_member_3_email" type="email" class="validate">
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
                                <input id="advisor_first_name" name="advisor_first_name" type="text" class="validate">
                                <label for="advisor_first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="advisor_last_name" name="advisor_last_name" type="text" class="validate">
                                <label for="advisor_last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="advisor_email" name="advisor_email" type="email" class="validate">
                                <label for="advisor_email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="advisor_subject" name="advisor_subject" type="text" class="validate">
                                <label for="advisor_subject">Subject Taught</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-section">
                        <h5>High School</h5>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="school" name="school" type="text" class="validate">
                                <label for="school">High School Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="school_city" name="school_city" type="text" class="validate">
                                <label for="school_city">City</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
@endsection