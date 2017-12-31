<?php

namespace App\Http\Helpers;

use App\Team;
use App\Internal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;

trait AdministrativeActions
{
    /**
     * Toggles application maintenance mode state.
     *
     * @return \Illuminate\Http\Response
     */
    public function toggleAppMaintenance() {

        if (App::isDownForMaintenance()) {
            Artisan::call('up');
            $message = 'Application is now live.';
        } else {
            Artisan::call('down');
            $message = 'Application is down for maintenance.';
        }

        return response($message, 200);
    }

    /**
     * Toggles team registration status.
     *
     * @return \Illuminate\Http\Response
     */
    public function toggleRegistration() {

        if (registrationIsOpen()) {
            Internal::first()->update(['registration_status' => false]);
            $message = 'Registration is now closed';
        } else {
            Internal::first()->update(['registration_status' => true]);
            $message = 'Registration is now open';
        }

        return response($message, 200);
    }

    /**
     * Updates settings regarding closed registration.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateClosedRegistrationSettings(Request $request) {

        $regEnded = ($request->input('reg_ended') === 'true');

        if (!$regEnded) {
            if (!$request->filled('open_date')) {
               return response('Please select a registration opening date.', 422);
            }

            $openDate = $request->input('open_date');

            Internal::first()->update([
                'registration_ended' => $regEnded,
                'registration_open_date' => new \DateTime($openDate)
            ]);
        } else {
            Internal::first()->update([
                'registration_ended' => $regEnded
            ]);
        }

        return response('Your settings have been successfully updated.',200);
    }

    /**
     * Soft-deletes a Team and its given Registration.
     *
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteRegistration(Team $team) {

        if ($team->delete()) {
            return response('Success',200);
        }

        return response('Internal Server Error', 500);
    }

    /**
     * Accept a Team and its Registration.
     *
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function acceptRegistration(Team $team) {

        $team->setAttribute('accepted', true);
        $team->setAttribute('waitlisted', false);
        $team->setAttribute('rejected', false);
        if ($team->save()) {
            return response('Success',200);
        }

        return response('Internal Server Error',500);
    }

    /**
     * Waitlist a Team and its Registration.
     *
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function waitlistRegistration(Team $team) {

        $team->setAttribute('waitlisted', true);
        $team->setAttribute('accepted', false);
        $team->setAttribute('rejected', false);
        if ($team->save()) {
            return response('Success',200);
        }

        return response('Internal Server Error',500);
    }

    /**
     * Reject a Team and its Registration.
     *
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function rejectRegistration(Team $team) {

        $team->setAttribute('rejected', true);
        $team->setAttribute('accepted', false);
        $team->setAttribute('waitlisted', false);
        if ($team->save()) {
            return response('Success',200);
        }

        return response('Internal Server Error',500);
    }
}