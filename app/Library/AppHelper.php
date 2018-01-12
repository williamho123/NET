<?php

use App\Internal;
use Carbon\Carbon;

/**
 * This file contains helper functions that are global to the entire Laravel App.
 * Autoloaded in composer.json file.
 */

// ------------------------------------ //

/**
 * Global helper to determine whether team registration are open.
 *
 * @return bool
 */
function registrationIsOpen() {

    return Internal::first()->getAttribute('registration_status');
}

/**
 * Global helper to determine whether registration has ended for the current year.
 *
 * @return bool
 */
function registrationHasEnded() {

    return Internal::first()->getAttribute('registration_ended');
}

/**
 * Global helper to get the formatted registration open date.
 *
 * @return string
 */
function getFormattedOpenRegDate() {

    $open_date = Internal::first()->getAttribute('registration_open_date');
    return Carbon::createFromFormat('Y-m-d', $open_date)->format('F jS, Y');
}

/**
 * Global helper to get the formatted tournament date.
 *
 * @return string
 */
function getFormattedTournamentDate() {

    $tour_date = Internal::first()->getAttribute('tournament_date');
    return Carbon::createFromFormat('Y-m-d', $tour_date)->format('F jS, Y');
}

/**
 * Global helper to get the formatted cut off date (one month prior to tournament date).
 *
 * @return string
 */
function getFormattedCutOffDate() {

    $tour_date = Internal::first()->getAttribute('tournament_date');
    return Carbon::createFromFormat('Y-m-d', $tour_date)->subMonth()->format('F jS, Y');
}

/**
 * Global helper to get the tournament year.
 *
 * @return string
 */
function getTournamentYear() {

    $tour_date = Internal::first()->getAttribute('tournament_date');
    return Carbon::createFromFormat('Y-m-d', $tour_date)->format('Y');
}

/**
 * Global helper to get the formatted registration end date.
 *
 * @return string
 */
function getFormattedRegistrationEndDate() {

    $end_date = Internal::first()->getAttribute('registration_end_date');
    return Carbon::parse($end_date)->format('F jS, Y');
}