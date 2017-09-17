/**
 * Require the jQuery and Lodash libraries and set global indicators.
 */

window._ = require('lodash');
window.$ = window.jQuery = require('jquery');

/*---------------------------------------------------------------------------------------*/

/*
 * Set up Laravel CSRF Token to work with all AJAX requests.
 */

let token = $('meta[name="csrf-token"]');

if (token) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token.attr('content')
        }
    });
} else {
    console.error('CSRF token not found in meta tag. AJAX requests may not function properly.');
}

/*---------------------------------------------------------------------------------------*/

/**
 * Require all other third-party Javascript dependencies.
 * - MaterializeCSS JS
 * - SweetAlert JS
 **/

require('materialize-css');
require('sweetalert');