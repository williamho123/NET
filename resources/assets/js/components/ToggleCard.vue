<template>
    <div class="card">
        <div class="card-content white-text">
            <div class="card-title"><slot name="title"></slot></div>
            <slot></slot>
            <br><br>
            <div class="row center-align">
                <div class="switch">
                    <label class="information-text white-text">
                        {{ offText }}
                        <input type="checkbox" @change="submitToggle" v-model="isChecked">
                        <span class="lever"></span>
                        {{ onText }}
                    </label>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['onText', 'offText', 'checked', 'postTo'],
        data () {
            return {
                isChecked: this.checked
            }
        },
        methods: {
            submitToggle () {
                $.post(this.postTo).fail(() => {
                    Materialize.toast('Something went wrong. Please reload and try again. <a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
                }).done((data) => {
                    Materialize.toast(data + '<a class="btn-flat toast-action" onclick="closeToast()">Dismiss</a>', 10000);
                });
            }
        }
    }
</script>