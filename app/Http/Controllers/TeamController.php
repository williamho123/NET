<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('team.dashboard');
    }
}
