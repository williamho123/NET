<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Assigns middleware to controller actions and routes.
     */
    public function __construct() {

        $this->middleware('auth:team');
    }

    /**
     * Shows the dashboard for the team.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard() {

        $team = Auth::guard('team')->user();

        return view('team.dashboard')->with('team', $team);
    }

    /**
     * Shows the registration data for the team.
     *
     * @return \Illuminate\View\View
     */
    public function viewRegistration() {

        $team = Auth::guard('team')->user();
        $registration = json_decode($team->registration->data);

        return view('team.registration-view')->with('team', $team)->with('registration', $registration);
    }
}
