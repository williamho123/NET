<?php

namespace App\Http\Controllers;

use App\Registration;
use \Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Log;

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

//        $this->validate($request, [
//            'school_name' => 'required',
//            'team_name' => 'required',
//            'team_captain_name' => 'required',
//            'team_captain_grade' => 'required',
//            'team_captain_email' => 'required|email'
//        ]);

        $request->session()->put('step1', $request->all());

        if ($request->session()->has('step1')) {
            return response('Success',200);
        } else {
            return response('Internal Server Error', 500);
        }
    }

    /**
     * Validates 2nd step of multi-part registration form. Stores data in session.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkStep2(Request $request) {

//        $this->validate($request, [
//            'team_member_1_name' => 'required',
//            'team_member_1_grade' => 'required',
//            'team_member_1_email' => 'required|email',
//            'team_member_2_name' => 'required',
//            'team_member_2_grade' => 'required',
//            'team_member_2_email' => 'required|email',
//            'team_member_3_name' => 'required',
//            'team_member_3_grade' => 'required',
//            'team_member_3_email' => 'required|email',
//        ]);

        $request->session()->put('step2', $request->all());

        if ($request->session()->has('step2')) {
            return response('Success',200);
        } else {
            return response('Internal Server Error', 500);
        }
    }

    /**
     * Validates 3rd step of multi-part registration form. Stores data in session.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkStep3(Request $request) {

//        $this->validate($request, [
//            'advisor_name' => 'required',
//            'advisor_email' => 'required|email',
//            'advisor_relationship' => 'required',
//            'team_captain_number' => 'required|digits:10',
//            'advisor_number' => 'required|digits:10'
//        ]);

        $request->session()->put('step3', $request->all());

        if ($request->session()->has('step3')) {
            return response('Success',200);
        } else {
            return response('Internal Server Error', 500);
        }
    }

    /**
     * Validates 4th step of multi-part registration form. Stores data in session.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function checkStep4(Request $request) {

        $this->validate($request, [
            'economics_experience' => 'required_if:checked,true|max:1500',
            'short_answer' => 'required|max:1500'
        ], [
            'economics_experience.required_if' => 'The economics experience field is required.'
        ]);

        $request->session()->put('step4', $request->all());

        if ($request->session()->has('step4')) {
            return response('Success',200);
        } else {
            return response('Internal Server Error', 500);
        }
    }

    /**
     * Persists registration and associates with a team object.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // Check if user has agreed to terms before submitting.
        if (!$request->has('agreed')) {
            return response('Internal Server Error', 500);
        }

        if ($request->input('agreed') != true) {
            return response('Internal Server Error', 500);
        }

        // Check if all data from previous steps exist in the session.
        $current = $request->session();
        if (!$current->has('step1') || !$current->has('step2') || !$current->has('step3') || !$current->has('step4')) {
            return response('Internal Server Error', 500);
        }

        $registration = $this->generateRegistration($current);

        return response('Success',200);

    }

    /**
     * Generates a new Registration object with session data and returns.
     *
     * @param $session
     * @return \App\Registration
     */
    protected function generateRegistration($session) {

    }

    /**
     * Generates a new Team object and returns.
     *
     * @param Registration $registration
     * @param $session
     * @return \App\Team
     */
    protected function generateTeam(Registration $registration, $session) {

    }
}
