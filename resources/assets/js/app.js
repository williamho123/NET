/*
 * Bootstrap all of the application's JavaScript dependencies.
 */

require('./bootstrap');

/*---------------------------------------------------------------------------------------*/

/**
 * Load all global helper functions that should be accessible from every module.
 */

require('./init');

/*---------------------------------------------------------------------------------------*/

/**
 * Require all application related JavaScript modules within the app folder.
 */

let req = require.context("./app", true, /\.js$/);
req.keys().forEach((key) => {
    req(key);
});

/*---------------------------------------------------------------------------------------*/

/**
 * Mount all Vue components for this app.
 */

// import VueFormWizard from 'vue-form-wizard';
// import 'vue-form-wizard/dist/vue-form-wizard.min.css';
// Vue.use(VueFormWizard);

// Vue virtual DOM might be interfering with all other JS manipulation of the DOM.
// Vue.component('example-component', require('./components/Example.vue'));
//
// window.onload = () => {
//     const app = new Vue({
//         el: "#app"
//     });
// };
