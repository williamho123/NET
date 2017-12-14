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
