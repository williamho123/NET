<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Shows the FAQ page for teams.
     *
     * @return \Illuminate\View\View
     */
    public function faq() {

        return view('team.faq');
    }

    /**
     * Validates and saves the uploaded waivers for the team.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function waivers(Request $request) {

        $team = Auth::guard('team')->user();

        // Reject if the team already has the forms flag set to true (i.e. uploaded waivers before) or not accepted.
        if (!$team->accepted || $team->forms) {
            return response('Forbidden', 403);
        }

        $this->validate($request, [
            'advisor_waiver' => 'required|file|mimes:pdf',
            'team_captain_waiver' => 'required|file|mimes:pdf',
            'team_member_1_waiver' => 'required|file|mimes:pdf',
            'team_member_2_waiver' => 'required|file|mimes:pdf',
            'team_member_3_waiver' => 'required|file|mimes:pdf',
        ]);

        $directory = 'waivers/' . $team->team_id_code;
        Storage::makeDirectory($directory);

        $waiverData = [
            'advisor' => [
                'display' => 'Advisor Waiver',
                'original' => $request->file('advisor_waiver')->getClientOriginalName(),
                'path' => $request->file('advisor_waiver')->store($directory)
            ],
            'team_captain' => [
                'display' => 'Team Captain Waiver',
                'original' => $request->file('team_captain_waiver')->getClientOriginalName(),
                'path' => $request->file('team_captain_waiver')->store($directory)
            ],
            'team_member_1' => [
                'display' => 'Team Member 1 Waiver',
                'original' => $request->file('team_member_1_waiver')->getClientOriginalName(),
                'path' => $request->file('team_member_1_waiver')->store($directory)
            ],
            'team_member_2' => [
                'display' => 'Team Member 2 Waiver',
                'original' => $request->file('team_member_2_waiver')->getClientOriginalName(),
                'path' => $request->file('team_member_2_waiver')->store($directory)
            ],
            'team_member_3' => [
                'display' => 'Team Member 3 Waiver',
                'original' => $request->file('team_member_3_waiver')->getClientOriginalName(),
                'path' => $request->file('team_member_3_waiver')->store($directory)
            ]
        ];

        $team->forms_data = json_encode($waiverData);
        $team->forms = true;

        if ($team->save()) {
            return response('Success', 200);
        }

        return response('Internal Server Error', 500);
    }
}
