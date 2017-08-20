<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
