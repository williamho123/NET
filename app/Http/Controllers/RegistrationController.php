<?php

namespace App\Http\Controllers;

use \Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegistrationRequest;

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
     * Validates and stores the new registration in the database.
     *
     * @param RegistrationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request) {


    }
}
