/**
 * Consolidate all Vue components into single JS file to serve.
 */

Vue.component('contact-form', require('./components/ContactForm.vue'));
Vue.component('registration-form', require('./components/RegistrationForm.vue'));
Vue.component('waiver-upload-form', require('./components/WaiverUploadForm.vue'));