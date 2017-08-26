<?php

namespace App\Http\Controllers;

use App\Internal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    /**
     * Assigns middleware to controller actions and routes.
     */
    public function __construct() {

        $this->middleware('auth:admin');
    }

    /**
     * Shows the dashboard for the admin.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard() {

        return view('admin.dashboard');
    }

    /**
     * Shows the settings page for the admin.
     *
     * @return \Illuminate\View\View
     */
    public function settings() {

        return view('admin.settings');
    }

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
}
