const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. Below, CSS and JS assets are compiled
 | together to serve to the users.
 |
 */

/**
 * Compile JS assets into public/js folder and extract vendor code.
 */

let vendor = ['jquery', 'lodash', 'materialize-css', 'sweetalert'];

mix.js('resources/assets/js/app.js', 'public/js/app.js').extract(vendor);

/*---------------------------------------------------------------------------------------*/

/**
 * Compile CSS assets into public/css folder.
 *  - MaterializeCSS
 *  - SweetAlert CSS
 *  - All other custom CSS
 */

mix.combine(['node_modules/materialize-css/dist/css/materialize.css',
        'node_modules/sweetalert/dist/sweetalert.css',
        'resources/assets/css/' + '*'],
        'public/css/app.css');

/*---------------------------------------------------------------------------------------*/

/**
 * Implement file versioning for cache busting if running in production mode.
 */

if (mix.inProduction()) {
    mix.version();
}