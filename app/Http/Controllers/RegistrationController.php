<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationController extends Controller
{
    /**
     * Shows the registration index page.
     *
     * @return \Illuminate\View\View
     */
    public function index() {

        return view('registration.index');
    }

    /**
     * Shows the registration form page.
     *
     * @return \Illuminate\View\View
     */
    public function page() {

        return view('registration.page');
    }
}
