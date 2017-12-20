/**
 * Consolidate all Vue components into single JS file to serve.
 */

Vue.component('contact-form', require('./components/ContactForm.vue'));
Vue.component('registration-form', require('./components/RegistrationForm.vue'));

/**
 * Mount all Vue components for this app.
 */

// import VueFormWizard from 'vue-form-wizard';
// import 'vue-form-wizard/dist/vue-form-wizard.min.css';
// Vue.use(VueFormWizard);

// Vue virtual DOM might be interfering with all other JS manipulation of the DOM.
//
// window.onload = () => {
//     const app = new Vue({
//         el: "#app"
//     });
// };