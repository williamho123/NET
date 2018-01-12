<template>
    <div>
        <b class="information-text">Advisor Waiver</b>
        <div class="row">
            <div class="col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File<i class="material-icons right">file_upload</i></span>
                        <input type="file" accept="application/pdf" @change="assignAdvisor($event)">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" type="text" placeholder="Choose a PDF Document...">
                    </div>
                </div>
            </div>
        </div>

        <b class="information-text">Team Captain Waiver</b>
        <div class="row">
            <div class="col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File<i class="material-icons right">file_upload</i></span>
                        <input type="file" accept="application/pdf" @change="assignTC($event)">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" type="text" placeholder="Choose a PDF Document...">
                    </div>
                </div>
            </div>
        </div>

        <b class="information-text">Team Member 1 Waiver</b>
        <div class="row">
            <div class="col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File<i class="material-icons right">file_upload</i></span>
                        <input type="file" accept="application/pdf" @change="assignT1($event)">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" type="text" placeholder="Choose a PDF Document...">
                    </div>
                </div>
            </div>
        </div>

        <b class="information-text">Team Member 2 Waiver</b>
        <div class="row">
            <div class="col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File<i class="material-icons right">file_upload</i></span>
                        <input type="file" accept="application/pdf" @change="assignT2($event)">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" type="text" placeholder="Choose a PDF Document...">
                    </div>
                </div>
            </div>
        </div>

        <b class="information-text">Team Member 3 Waiver</b>
        <div class="row">
            <div class="col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File<i class="material-icons right">file_upload</i></span>
                        <input type="file" accept="application/pdf" @change="assignT3($event)">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" type="text" placeholder="Choose a PDF Document...">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <div v-if="!submitted">
                    <button class="btn waves-effect waves-light" @click="submitWaivers">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                <div v-else>
                    <div class="progress">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                advisorWaiver: '',
                teamCaptainWaiver: '',
                teamMember1Waiver: '',
                teamMember2Waiver: '',
                teamMember3Waiver: '',
                submitted: false
            }
        },
        methods: {
            assignAdvisor (event) { this.advisorWaiver = event.target.files[0]; },
            assignTC (event) { this.teamCaptainWaiver = event.target.files[0]; },
            assignT1 (event) { this.teamMember1Waiver = event.target.files[0]; },
            assignT2 (event) { this.teamMember2Waiver = event.target.files[0]; },
            assignT3 (event) { this.teamMember3Waiver = event.target.files[0]; },
            submitWaivers () {
                this.submitted = true;

                let data = new FormData();
                data.append('advisor_waiver', this.advisorWaiver);
                data.append('team_captain_waiver', this.teamCaptainWaiver);
                data.append('team_member_1_waiver', this.teamMember1Waiver);
                data.append('team_member_2_waiver', this.teamMember2Waiver);
                data.append('team_member_3_waiver', this.teamMember3Waiver);

                $.ajax({
                    url: '/team/waivers',
                    type: 'POST',
                    data: data,
                    processData: false,
                    contentType: false,
                }).fail((data) => {
                    handleErrors(data);
                    this.submitted = false;
                }).done(() => {
                    swal({
                        title: "Success!",
                        text: "Your waivers have been uploaded.",
                        type: "success",
                        confirmButtonColor: "#4db6ac"
                    }, () => {
                        location.reload();
                    });
                });
            }
        }
    }
</script>