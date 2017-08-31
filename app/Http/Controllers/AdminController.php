<?php

namespace App\Http\Controllers;

use App\Internal;
use Illuminate\Http\Request;
use App\Http\Helpers\AdministrativeActions;

class AdminController extends Controller
{
    use AdministrativeActions;

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

        $registrationEnded = Internal::first()->getAttribute('registration_ended');
        $openDate = Internal::first()->getAttribute('registration_open_date');

        return view('admin.settings')->with('registrationEnded', $registrationEnded)
                                           ->with('openDate', $openDate);
    }
}
