<?php

namespace App\Http\Helpers;

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
     * Updates settings regarding closed registrations.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateClosedRegistrationSettings(Request $request) {

        $regEnded = ($request->input('reg_ended') === 'true');

        if (!$regEnded) {
            if (!$request->has('open_date')) {
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
}