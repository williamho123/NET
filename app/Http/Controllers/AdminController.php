<?php

namespace App\Http\Controllers;

use App\Team;
use App\Internal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Helpers\AdministrativeActions;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    use AdministrativeActions;

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

    /**
     * Shows the registration index page. Registrations 6 months prior are displayed.
     *
     * @return \Illuminate\View\View
     */
    public function registrations() {

        // maybe change selection criteria to "active" boolean flag on Team model? Have option in settings tab to archive these registrations
        $from = Carbon::now()->subMonth(6);
        $currentTeams = Team::where('created_at', '>=', $from)->oldest()->get();
        $archivedTeams = Team::where('created_at', '<', $from)->oldest()->get();

        return view('admin.registration.index')->with('currentTeams', $currentTeams)
                                                     ->with('archivedTeams', $archivedTeams);
    }

    /**
     * Show the registration information for the given Team.
     *
     * @param Team $team
     * @return \Illuminate\View\View
     */
    public function viewRegistration(Team $team) {

        $registration = json_decode($team->registration->data);

        return view('admin.registration.view')->with('team', $team)->with('registration', $registration);
    }

    /**
     * Show the registration edit page for the given Team.
     *
     * @param Team $team
     * @return \Illuminate\View\View
     */
    public function editRegistration(Team $team) {

        $registration = json_decode($team->registration->data);

        return view('admin.registration.edit')->with('team', $team)->with('registration', $registration);
    }

    /**
     * Show the waivers page.
     *
     * @param Team $team
     * @return \Illuminate\View\View
     */
    public function viewWaivers(Team $team) {

        if (!$team->forms) {
            abort(404);
        }

        return view('admin.registration.waivers')->with('team', $team);
    }

    /**
     * Displays the appropriate waiver for viewing.
     *
     * @param Team $team
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function viewSpecificWaiver(Team $team, $id) {

        $data = json_decode($team->forms_data);
        $path = storage_path('app/');
        $file = null;

        if ($id === 'advisor' && Storage::exists($data->advisor->path)) {
            $file = response()->file($path . $data->advisor->path, ['Cache-Control' => 'no-cache']);
        } elseif ($id === 'team_captain' && Storage::exists($data->team_captain->path)) {
            $file = response()->file($path . $data->team_captain->path, ['Cache-Control' => 'no-cache']);
        } elseif ($id === 'team_member_1' && Storage::exists($data->team_member_1->path)) {
            $file = response()->file($path . $data->team_member_1->path, ['Cache-Control' => 'no-cache']);
        } elseif ($id === 'team_member_2' && Storage::exists($data->team_member_2->path)) {
            $file = response()->file($path . $data->team_member_2->path, ['Cache-Control' => 'no-cache']);
        } elseif ($id === 'team_member_3' && Storage::exists($data->team_member_3->path)) {
            $file = response()->file($path . $data->team_member_3->path, ['Cache-Control' => 'no-cache']);
        } else {
            abort(404);
        }

        return $file;
    }

    /**
     * Shows the settings page for the admin.
     *
     * @return \Illuminate\View\View
     */
    public function settings() {

        $registrationEnded = Internal::first()->getAttribute('registration_ended');
        $openDate = Internal::first()->getAttribute('registration_open_date');

        return view('admin.settings')->with('registrationEnded', $registrationEnded)
                                           ->with('openDate', $openDate);
    }
}
