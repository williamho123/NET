/**
 * Consolidate all Vue components into single JS file to serve.
 */

Vue.component('contact-form', require('./components/ContactForm.vue'));
Vue.component('registration-form', require('./components/RegistrationForm.vue'));
Vue.component('waiver-upload-form', require('./components/WaiverUploadForm.vue'));
Vue.component('email-update-form', require('./components/EmailUpdateForm.vue'));
Vue.component('toggle-card', require('./components/ToggleCard.vue'));
Vue.component('closed-registration-card', require('./components/ClosedRegistrationSettingsCard.vue'));
Vue.component('date-card', require('./components/DateCard.vue'));