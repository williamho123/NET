<template>
    <div class="card">
        <div class="card-content white-text">
            <div class="card-title"><slot name="title"></slot></div>
            <slot></slot>
            <br>
            <div class="row center-align">
                <date-picker input-class="white-text"
                             :not-before='new Date()'
                             lang="en" :confirm="true"
                             @confirm="submitDate"
                             v-model="date">
                </date-picker>
            </div>
        </div>
    </div>
</template>

<script>
    import DatePicker from 'vue2-datepicker'

    export default {
        components: { DatePicker },
        props: ['initDate', 'postTo'],
        data () {
            return {
                date: new Date(this.initDate + ' 00:00:00')
            }
        },
        methods: {
            submitDate() {
                $.post(this.postTo, {
                    date: this.date
                }).fail(() => {
                    Materialize.toast('Something went wrong. Please reload and try again. <a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
                }).done((data) => {
                    Materialize.toast(data + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
                });
            }
        }
    }
</script>