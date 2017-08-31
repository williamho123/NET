<?php

use App\Internal;

/**
 * This file contains helper functions that are global to the entire Laravel App.
 * Autoloaded in composer.json file.
 */

// ------------------------------------ //

/**
 * Global helper to determine whether team registrations are open.
 *
 * @return bool
 */
function registrationIsOpen() {

    return Internal::first()->getAttribute('registration_status');
}

/**
 * Global helper to determine whether registration has ended for the current year.
 */
function registrationHasEnded() {

    return Internal::first()->getAttribute('registration_ended');
}