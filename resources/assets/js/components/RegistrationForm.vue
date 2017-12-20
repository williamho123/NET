<template>
    <form-wizard color="#4db6ac"
                 backButtonText="Previous"
                 finishButtonText="Submit"
                 @on-complete="submitForm">

        <h2 slot="title"></h2>

        <tab-content title="General Info & Captain"
                     icon="ti-home"
                     :before-change="validateStep1">

            <h5>General Information</h5>
            <div class="row">
                <div class="input-field col s12">
                    <input id="school" type="text">
                    <label for="school">High School Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="team_name" type="text">
                    <label for="team_name">Team Name</label>
                </div>
            </div>

            <br>

            <h5>Team Captain</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_captain_name" type="text">
                    <label for="team_captain_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_captain_grade">
                        <option value="" disabled selected>Select an year</option>
                        <option value="Freshman">Freshman</option>
                        <option value="Sophomore">Sophomore</option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                    </select>
                    <label for="team_captain_grade">Grade Level</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="team_captain_email" type="email">
                    <label for="team_captain_email">Email</label>
                </div>
            </div>
        </tab-content>

        <tab-content title="Team Members"
                     icon="ti-user"
                     :before-change="validateStep2">

            <h5>Team Member 1</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_member_1_name" type="text">
                    <label for="team_member_1_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_member_1_grade">
                        <option value="" disabled selected>Select an year</option>
                        <option value="Freshman">Freshman</option>
                        <option value="Sophomore">Sophomore</option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                    </select>
                    <label for="team_member_1_grade">Grade Level</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="team_member_1_email" type="email">
                    <label for="team_member_1_email">Email</label>
                </div>
            </div>

            <br>

            <h5>Team Member 2</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_member_2_name" type="text">
                    <label for="team_member_2_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_member_2_grade">
                        <option value="" disabled selected>Select an year</option>
                        <option value="Freshman">Freshman</option>
                        <option value="Sophomore">Sophomore</option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                    </select>
                    <label for="team_member_2_grade">Grade Level</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="team_member_2_email" type="email">
                    <label for="team_member_2_email">Email</label>
                </div>
            </div>

            <br>

            <h5>Team Member 3</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_member_3_name" type="text">
                    <label for="team_member_3_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_member_3_grade">
                        <option value="" disabled selected>Select an year</option>
                        <option value="Freshman">Freshman</option>
                        <option value="Sophomore">Sophomore</option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                    </select>
                    <label for="team_member_3_grade">Grade Level</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="team_member_3_email" type="email">
                    <label for="team_member_3_email">Email</label>
                </div>
            </div>
        </tab-content>

        <tab-content title="Advisor & Phone Numbers"
                     icon="ti-mobile"
                     :before-change="validateStep3">

            <h5>Advisor</h5>
            <p>Must be a teacher or parent/guardian aged 25 years or older.</p>
            <div class="row">
                <div class="input-field col s12">
                    <input id="advisor_name" type="text">
                    <label for="advisor_name">Advisor Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="advisor_email" type="email">
                    <label for="advisor_email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="advisor_subject" type="text">
                    <label for="advisor_subject">Relationship to Participants</label>
                </div>
            </div>

            <br>

            <h5>Mobile Phone Numbers</h5>
            <p>This information will only be used in the event we need to contact you the day of the tournament.</p>
            <div class="row">
                <div class="input-field col s12">
                    <the-mask id="team_captain_number" mask="(###) ###-####" type="tel"></the-mask>
                    <label for="team_captain_number">Team Captain Number</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <the-mask id="advisor_number" mask="(###) ###-####" type="tel"></the-mask>
                    <label for="advisor_number">Advisor Number</label>
                </div>
            </div>
        </tab-content>

        <tab-content title="Short Answer"
                     icon="ti-write"
                     :before-change="validateStep4">

            <h5>Economics Experience</h5>
            <p class="information-text">Has any team member had previous exposure to economics (e.g. coursework, activities, etc.) ?</p>
            <div class="row">
                <div class="switch">
                    <label>
                        No
                        <input id="econ_back" type="checkbox" v-model="checked">
                        <span class="lever"></span>
                        Yes
                    </label>
                </div>
            </div>

            <br>

            <div v-if="checked">
                <p class="information-text">Please elaborate on economics background (e.g. which courses, what setting, etc.).</p>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="econ_exp" class="materialize-textarea" data-length="1500"></textarea>
                        <label for="econ_exp">Economics Experience</label>
                    </div>
                </div>
            </div>

            <br>

            <h5>Short Answer</h5>
            <p class="information-text">What do you and your team hope to get out of NET?</p>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="why_net" class="materialize-textarea" data-length="1500"></textarea>
                    <label for="why_net">Enter Response</label>
                </div>
            </div>
        </tab-content>
    </form-wizard>
</template>

<script>
    import {FormWizard, TabContent} from 'vue-form-wizard'
    import {TheMask} from 'vue-the-mask'
    import 'vue-form-wizard/dist/vue-form-wizard.min.css'

    export default {
        components: {
            FormWizard,
            TabContent,
            TheMask
        },
        data () {
            return {
                checked: false
            }
        },
        methods: {
            submitForm () {
                alert('DONE');
            },
            validateStep1 () {
                $('html, body').animate({scrollTop:0}, 1000);
                return true;
            },
            validateStep2 () {
                $('html, body').animate({scrollTop:0}, 1000);
                return true;
            },
            validateStep3 () {
                $('html, body').animate({scrollTop:0}, 1000);
                return true;
            },
            validateStep4 () {
                $('html, body').animate({scrollTop:0}, 1000);
                return true;
            }
        }
    }
</script>