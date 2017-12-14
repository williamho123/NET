<template>
    <form class="col s12" v-on:submit.prevent="submit">

        <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" v-model="firstName">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" v-model="lastName">
                <label for="last_name">Last Name</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" v-model="email">
                <label for="email">Email</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="subject" type="text" v-model="subject">
                <label for="subject">Subject</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="message" class="materialize-textarea" data-length="1500" v-model="message"></textarea>
                <label for="message">Message</label>
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
</template>

<script>
    export default {
        data () {
            return {
                firstName: '',
                lastName: '',
                email: '',
                subject: '',
                message: ''
            }
        },
        methods: {
            submit () {
                $.post('/contact', {
                    first_name: this.firstName,
                    last_name: this.lastName,
                    email: this.email,
                    subject: this.subject,
                    message: this.message
                }).fail((data) => {
                   handleErrors(data);
                }).done(() => {
                    swal({
                        title: "Success!",
                        text: "Your message has been submitted.",
                        type: "success",
                        confirmButtonColor: "#4db6ac"
                    }, () => {
                            location.reload();
                        }
                    );
                });
            }
        }
    }
</script>