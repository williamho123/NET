<?php

namespace App\Http\Controllers;

use App\Team;
use App\Internal;
use Carbon\Carbon;
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
     * Shows the registration index page. Registrations 6 months prior are displayed.
     *
     * @return \Illuminate\View\View
     */
    public function registrations() {

        // maybe change selection criteria to "active" boolean flag on Team model? Have option in settings tab to archive these registrations
        $from = Carbon::now()->subMonth(6);
        $currentTeams = Team::where('created_at', '>=', $from)->oldest()->get();
        $archivedTeams = Team::where('created_at', '<', $from)->oldest()->get();

        return view('admin.registration.index')->with('currentTeams', $currentTeams)
                                                     ->with('archivedTeams', $archivedTeams);
    }

    /**
     * Show the registration information for the given Team.
     *
     * @param Team $team
     * @return \Illuminate\View\View
     */
    public function viewRegistration(Team $team) {

        $registration = json_decode($team->registration->data);

        return view('admin.registration.view')->with('team', $team)->with('registration', $registration);
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
