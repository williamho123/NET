<?php

namespace App\Http\Controllers;

use App\Registration;
use App\Team;
use App\Mail\RegistrationReceived;
use \Carbon\Carbon;
use \Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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

        $this->validate($request, [
            'school_name' => 'required',
            'team_name' => 'required',
            'team_captain_name' => 'required',
            'team_captain_grade' => 'required',
            'team_captain_email' => 'required|email'
        ]);

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

        $this->validate($request, [
            'team_member_1_name' => 'required',
            'team_member_1_grade' => 'required',
            'team_member_1_email' => 'required|email',
            'team_member_2_name' => 'required',
            'team_member_2_grade' => 'required',
            'team_member_2_email' => 'required|email',
            'team_member_3_name' => 'required',
            'team_member_3_grade' => 'required',
            'team_member_3_email' => 'required|email',
        ]);

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

        $this->validate($request, [
            'advisor_name' => 'required',
            'advisor_email' => 'required|email',
            'advisor_relationship' => 'required',
            'team_captain_number' => 'required|digits:10',
            'advisor_number' => 'required|digits:10'
        ]);

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
     * Persists registration information and associates with a team object.
     * Dispatches confirmation email with login credentials.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // Check if user has agreed to terms before submitting.
        if (!$request->has('agreed') || $request->input('agreed') != true) {
            return response('Internal Server Error', 500);
        }

        // Check if all data from previous steps exist in the session.
        $current = $request->session();
        if (!$current->has('step1') || !$current->has('step2') || !$current->has('step3') || !$current->has('step4')) {
            return response('Internal Server Error', 500);
        }

        // Create the Registration object.
        $registration = $this->generateRegistration($current);
        if ($registration == null) {
            return response('Internal Server Error', 500);
        }

        $pw = $this->generatePassword(7);

        // Create the Team object.
        $team = $this->generateTeam($registration, $pw, $current);
        if ($team == null) {
            $registration->forceDelete(); // Bail on saving registration info as well if team cannot be created.
            return response('Internal Server Error', 500);
        }

        $step1 = $current->get('step1');
        $step3 = $current->get('step3');
        $team_captain_email = $step1['team_captain_email'];
        $advisor_email = $step3['advisor_email'];

        // Send the confirmation email.
        Mail::to([$team_captain_email, $advisor_email])->send(new RegistrationReceived($team, $pw));

        // Clear all temporary session form data to prevent conflicts.
        $this->clearFormSessionData($current);

        return response('Success',200);
    }

    /**
     * Generates a new Registration object with session data and returns. NULL if registration cannot be properly saved.
     *
     * @param $session
     * @return \App\Registration | null
     */
    protected function generateRegistration($session) {

        $step1 = $session->get('step1');
        $step2 = $session->get('step2');
        $step3 = $session->get('step3');
        $step4 = $session->get('step4');

        $data = [
            'team_captain' => [
                'name' => $step1['team_captain_name'],
                'grade' => $step1['team_captain_grade'],
                'email' => $step1['team_captain_email']
            ],
            'team_member_1' => [
                'name' => $step2['team_member_1_name'],
                'grade' => $step2['team_member_1_grade'],
                'email' => $step2['team_member_1_email'],
            ],
            'team_member_2' => [
                'name' => $step2['team_member_2_name'],
                'grade' => $step2['team_member_2_grade'],
                'email' => $step2['team_member_2_email']
            ],
            'team_member_3' => [
                'name' => $step2['team_member_3_name'],
                'grade' => $step2['team_member_3_grade'],
                'email' => $step2['team_member_3_email']
            ],
            'advisor' => [
                'name' => $step3['advisor_name'],
                'email' => $step3['advisor_email'],
                'relationship' => $step3['advisor_relationship']
            ],
            'numbers' => [
                'advisor' => $step3['advisor_number'],
                'team_captain' => $step3['team_captain_number']
            ],
            'econ_exp' => $step4['checked'],
            'econ_back' => $step4['economics_experience'],
            'short_answer' => $step4['short_answer']
        ];

        $registration = new Registration();
        $registration->setAttribute('data', json_encode($data));

        if ($registration->save()) {
            return $registration;
        }

        return null;
    }

    /**
     * Generates a new Team object and returns. NULL if team cannot be properly saved.
     *
     * @param Registration $registration
     * @param $pw
     * @param $session
     * @return \App\Team
     */
    protected function generateTeam(Registration $registration, $pw, $session) {

        $allIDs = Team::withTrashed()->get()->pluck('team_id_code');
        $faker = Factory::create();
        $newID = $faker->randomNumber(6);

        while ($allIDs->contains($newID)) {
            $newID = $faker->randomNumber(6);
        }

        $step1 = $session->get('step1');

        $team = new Team();
        $team->setAttribute('team_id_code', $newID);
        $team->setAttribute('password', bcrypt($pw));
        $team->setAttribute('team_name', $step1['team_name']);
        $team->setAttribute('school', $step1['school_name']);
        $team->setAttribute('registration_id', $registration->getAttribute('id'));

        if ($team->save()) {
            return $team;
        }

        return null;
    }

    /**
     * Clears all form data temporarily stored in session to prevent conflicts.
     *
     * @param $session
     */
    protected function clearFormSessionData($session) {

        $session->forget('step1');
        $session->forget('step2');
        $session->forget('step3');
        $session->forget('step4');
    }

    /**
     * Private helper to generate a password of specified length.
     *
     * @param int $length
     * @return string
     */
    private function generatePassword($length = 8) {

        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $count = mb_strlen($chars);

        for ($i = 0, $result = ''; $i < $length; $i++) {
            $index = rand(0, $count - 1);
            $result .= mb_substr($chars, $index, 1);
        }

        return $result;
    }
}
