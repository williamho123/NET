<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;

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
    public function create() {

        return view('registration.create');
    }

    /**
     * Validates and stores the new registration in the database.
     *
     * @param RegistrationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request) {


    }
}
