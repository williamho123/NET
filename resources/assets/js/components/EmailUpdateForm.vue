<template>
    <div class="row">
        <div class="input-field col s7 m9 l10">
            <i class="material-icons prefix white-text">email</i>
            <input id="email_update" name="email_update" type="email" class="white-text" v-model="email">
            <label for="email_update" class="white-text">Your Email</label>
        </div>
        <div class="input-field col s5 m3 l2">
            <button class="btn waves-effect waves-light" @click="submit">Submit</button>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
               email: ''
            }
        },
        methods: {
            submit () {
                $.post('/registration/update', {
                    email_update: this.email
                }).fail((data) => {
                    handleErrors(data);
                }).done(() => {
                    swal({
                        title: "Success!",
                        text: "Your email has been added.",
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