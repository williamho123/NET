<template>
    <div class="card">
        <div class="card-content white-text">
            <span class="card-title">Closed Registration Settings</span>
            <br>
            <div class="row">
                <div class="col s12 m6">
                    <div class="information-text">
                        Registration is closed because
                    </div>
                    <br>
                    <p>
                        <input class="with-gap" type="radio" id="reg_ended" value="1" v-model="isPicked"/>
                        <label for="reg_ended" class="white-text">It has ended for the current year.</label>
                    </p>
                    <p>
                        <input class="with-gap" type="radio" id="reg_not_open" value="2" v-model="isPicked"/>
                        <label for="reg_not_open" class="white-text">It has not yet opened for the current year.</label>
                    </p>
                </div>
                <div class="col s12 m6">
                    <br>
                    <transition name="fade">
                        <div v-if="isPicked == 2">
                            <p class="information-text white-text">
                                Registration open date
                            </p>

                            <date-picker input-class="white-text" :not-before='new Date()' lang="en" v-model="date"></date-picker>
                        </div>
                    </transition>
                </div>
            </div>
            <button class="btn waves-effect waves-light" @click="submit">Update
                <i class="material-icons right">update</i>
            </button>
        </div>
    </div>
</template>

<script>
    import DatePicker from 'vue2-datepicker'

    export default {
        components: { DatePicker },
        props: ['ended', 'openDate'],
        data () {
            return {
                isPicked: this.ended ? 1 : 2,
                date: new Date(this.openDate + ' 00:00:00')
            }
        },
        methods: {
            submit() {
                $.post('/admin/settings/closedRegistration', {
                    reg_ended: this.isPicked === '1' ? 'true' : 'false',
                    open_date: this.date
                }).fail((data) => {
                    Materialize.toast(data.responseText + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
                }).done((data) => {
                    Materialize.toast(data + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
                });
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