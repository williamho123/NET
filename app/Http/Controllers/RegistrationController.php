<?php

namespace App\Http\Controllers;

use \Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    /**
     * Assigns middleware to controller actions and routes.
     */
    public function __construct() {

        $this->middleware('registration')->except(['index', 'keepUpdated']);
    }

    /**
     * Shows the registration index page.
     *
     * @return \Illuminate\View\View
     */
    public function index() {

        return view('registration.index');
    }

    /**
     * Stores email address into database to give user registration updates.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function keepUpdated(Request $request) {

        $this->validate($request, [
            'email_update' => 'required|email'
        ]);

        $status = DB::table('email_updates')->insert([
            'email' => $request->input('email_update'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if ($status) {
            return response('Success', 200);
        }

        return response('Internal Server Error', 500);
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
     * Validates 1st step of multi-part registration form. Stores data in session.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkStep1(Request $request) {

    }

    /**
     * Validates 2nd step of multi-part registration form. Stores data in session.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkStep2(Request $request) {

    }

    /**
     * Validates 3rd step of multi-part registration form. Stores data in session.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkStep3(Request $request) {

    }

    /**
     * Validates 4th step of multi-part registration form. Stores data in session.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkStep4(Request $request) {

    }

    /**
     * Persists registration and associates with a team object.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // check to see if statement has been agreed to
        // check if data exists in session

    }
}
