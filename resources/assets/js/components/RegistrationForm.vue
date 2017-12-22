<template>
    <form-wizard color="#4db6ac"
                 backButtonText="Previous"
                 finishButtonText="Submit"
                 @on-complete="openAgreementModal">

        <h2 slot="title"></h2>

        <tab-content title="General Info & Captain"
                     icon="ti-home"
                     :before-change="validateStep1">

            <h5>General Information</h5>
            <div class="row">
                <div class="input-field col s12">
                    <input id="school" type="text" v-model="school">
                    <label for="school">High School Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="team_name" type="text" v-model="teamName">
                    <label for="team_name">Team Name</label>
                </div>
            </div>

            <br>

            <h5>Team Captain</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_captain_name" type="text" v-model="teamCaptainName">
                    <label for="team_captain_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_captain_grade" v-model="teamCaptainGrade">
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
                    <input id="team_captain_email" type="email" v-model="teamCaptainEmail">
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
                    <input id="team_member_1_name" type="text" v-model="teamMember1Name">
                    <label for="team_member_1_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_member_1_grade" v-model="teamMember1Grade">
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
                    <input id="team_member_1_email" type="email" v-model="teamMember1Email">
                    <label for="team_member_1_email">Email</label>
                </div>
            </div>

            <br>

            <h5>Team Member 2</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_member_2_name" type="text" v-model="teamMember2Name">
                    <label for="team_member_2_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_member_2_grade" v-model="teamMember2Grade">
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
                    <input id="team_member_2_email" type="email" v-model="teamMember2Email">
                    <label for="team_member_2_email">Email</label>
                </div>
            </div>

            <br>

            <h5>Team Member 3</h5>
            <div class="row">
                <div class="input-field col s6">
                    <input id="team_member_3_name" type="text" v-model="teamMember3Name">
                    <label for="team_member_3_name">Name</label>
                </div>
                <div class="input-field col s6">
                    <select id="team_member_3_grade" v-model="teamMember3Grade">
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
                    <input id="team_member_3_email" type="email" v-model="teamMember3Email">
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
                    <input id="advisor_name" type="text" v-model="advisorName">
                    <label for="advisor_name">Advisor Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="advisor_email" type="email" v-model="advisorEmail">
                    <label for="advisor_email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="advisor_subject" type="text" v-model="advisorSubject">
                    <label for="advisor_subject">Relationship to Participants</label>
                </div>
            </div>

            <br>

            <h5>Mobile Phone Numbers</h5>
            <p>This information will only be used in the event we need to contact you the day of the tournament.</p>
            <div class="row">
                <div class="input-field col s12">
                    <the-mask id="team_captain_number" mask="(###) ###-####" type="tel" v-model="teamCaptainNumber"></the-mask>
                    <label for="team_captain_number">Team Captain Number</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <the-mask id="advisor_number" mask="(###) ###-####" type="tel" v-model="advisorNumber"></the-mask>
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

            <transition name="fade">
                <div v-if="checked">
                    <p class="information-text">Please elaborate on economics background (e.g. which courses, what setting, etc.).</p>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="econ_exp" class="materialize-textarea" data-length="1500" v-model="econExp"></textarea>
                            <label for="econ_exp">Economics Experience</label>
                        </div>
                    </div>
                </div>
            </transition>

            <br>

            <h5>Short Answer</h5>
            <p class="information-text">What do you and your team hope to get out of NET?</p>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="why_net" class="materialize-textarea" data-length="1500" v-model="whyNet"></textarea>
                    <label for="why_net">Enter Response</label>
                </div>
            </div>

            <div id="agree_modal" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4>Registration Agreement</h4>
                    <p class="information-text">
                        Read the following statement carefully, and check "I Agree" to complete your registration.
                    </p>

                    <blockquote>
                        By registering for NET 2018, I confirm that my team (i.e. all student members and advisor that make up the team)
                        from {{ school }} will be in attendance at the tournament on April 7, 2018. If for
                        whatever reason the team will not be able to participate in the tournament, I will notify the tournament
                        organizers by <b>March 7, 2018</b> for arrangements to be made. I acknowledge that failure to do so
                        will seriously jeopardize {{ school }}’s participation at NET in the future.
                    </blockquote>

                    <p style="padding-top: 1rem">
                        <input type="checkbox" id="agree" v-model="agreed"/>
                        <label for="agree">I Agree</label>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="modal-action modal-close waves-effect waves-light btn red darken-2">Cancel <i class="material-icons right">cancel</i></button>
                    <button class="waves-effect waves-light btn" :disabled="!agreed">Submit <i class="material-icons right">send</i></button>
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
                school: '',
                teamName: '',
                teamCaptainName: '', teamCaptainGrade: '', teamCaptainEmail: '',
                teamMember1Name: '', teamMember1Grade: '', teamMember1Email: '',
                teamMember2Name: '', teamMember2Grade: '', teamMember2Email: '',
                teamMember3Name: '', teamMember3Grade: '', teamMember3Email: '',
                advisorName: '', advisorEmail: '', advisorSubject: '',
                teamCaptainNumber: '', advisorNumber: '',
                checked: false, econExp: '',
                whyNet: '',
                agreed: false
            }
        },
        methods: {
            scrollTop () {
                $('html, body').animate({scrollTop:0}, 1000);
            },
            openAgreementModal () {
                $('#agree_modal').modal('open');
            },
            validateStep1 () {
                scrollTop();
                return true;
            },
            validateStep2 () {
                scrollTop();
                return true;
            },
            validateStep3 () {
                scrollTop();
                return true;
            },
            validateStep4 () {
                scrollTop();
                return true;
            }
        }
    }
</script>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity 1s ease-out;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>