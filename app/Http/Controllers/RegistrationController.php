<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationController extends Controller
{
    /**
     * Shows the registration page.
     *
     * @return \Illuminate\View\View
     */
    public function index() {

        return view('registration');
    }
}
