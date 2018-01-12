<?php

namespace App\Http\Helpers;

use App\Team;
use App\Internal;
use App\Mail\RegistrationComplete;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Log;

trait AdministrativeActions
{
    /**
     * Toggles application maintenance mode state.
     *
     * @return \Illuminate\Http\Response
     */
    public function toggleAppMaintenance() {

        if (App::isDownForMaintenance()) {
            Artisan::call('up');
            $message = 'Application is now live.';
        } else {
            Artisan::call('down');
            $message = 'Application is down for maintenance.';
        }

        return response($message, 200);
    }

    /**
     * Toggles team registration status.
     *
     * @return \Illuminate\Http\Response
     */
    public function toggleRegistration() {

        if (registrationIsOpen()) {
            Internal::first()->update(['registration_status' => false]);
            $message = 'Registration is now closed';
        } else {
            Internal::first()->update(['registration_status' => true]);
            $message = 'Registration is now open';
        }

        return response($message, 200);
    }

    /**
     * Update tournament date.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateTournamentDate(Request $request) {

        if (!$request->filled('date')) {
            return response('The date field is required', 422);
        }

        Internal::first()->update([
            'tournament_date' => new \DateTime($request->input('date'))
        ]);

        return response('The tournament date has been set.', 200);
    }

    /**
     * Update registration close date.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateRegistrationEndDate(Request $request) {

        if (!$request->filled('date')) {
            return response('The date field is required', 422);
        }

        Internal::first()->update([
            'registration_end_date' => new \DateTime($request->input('date'))
        ]);

        return response('The registration end date has been set.', 200);
    }

    /**
     * Updates settings regarding closed registration.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateClosedRegistrationSettings(Request $request) {

        $regEnded = ($request->input('reg_ended') === 'true');

        if (!$regEnded) {
            if (!$request->filled('open_date')) {
               return response('Please select a registration open date.', 422);
            }

            $openDate = $request->input('open_date');

            Internal::first()->update([
                'registration_ended' => $regEnded,
                'registration_open_date' => new \DateTime($openDate)
            ]);
        } else {
            Internal::first()->update([
                'registration_ended' => $regEnded
            ]);
        }

        return response('Your settings have been successfully updated.',200);
    }

    /**
     * Soft-deletes a Team and its given Registration.
     *
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteRegistration(Team $team) {

        if ($team->delete()) {
            return response('Success',200);
        }

        return response('Internal Server Error', 500);
    }

    /**
     * Updates a team's registration information. NO VALIDATION IS PROVIDED - assumes admin integrity.
     *
     * @param Request $request
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateRegistration(Request $request, Team $team) {

        $team->school = $request->input('school_name');
        $team->team_name = $request->input('team_name');

        $data = [
            'team_captain' => [
                'name' => $request->input('team_captain_name'),
                'grade' => $request->input('team_captain_grade'),
                'email' => $request->input('team_captain_email')
            ],
            'team_member_1' => [
                'name' => $request->input('team_member_1_name'),
                'grade' => $request->input('team_member_1_grade'),
                'email' => $request->input('team_member_1_email')
            ],
            'team_member_2' => [
                'name' => $request->input('team_member_2_name'),
                'grade' => $request->input('team_member_2_grade'),
                'email' => $request->input('team_member_2_email')
            ],
            'team_member_3' => [
                'name' => $request->input('team_member_3_name'),
                'grade' => $request->input('team_member_3_grade'),
                'email' => $request->input('team_member_3_email')
            ],
            'advisor' => [
                'name' => $request->input('advisor_name'),
                'email' => $request->input('advisor_email'),
                'relationship' => $request->input('advisor_relationship')
            ],
            'numbers' => [
                'advisor' => $request->input('advisor_number'),
                'team_captain' => $request->input('team_captain_number')
            ],
            'econ_exp' => ($request->exists('checked') ? true : false),
            'econ_back' => $request->input('economics_experience'),
            'short_answer' => $request->input('short_answer')
        ];

        $registration = $team->registration;
        $registration->data = json_encode($data);

        if ($registration->save() && $team->save()) {
            return response('Success',200);
        }

        return response('Internal Server Error', 500);
    }

    /**
     * Accept a Team and its Registration.
     *
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function acceptRegistration(Team $team) {

        if (!$team->active) {
            return response('Forbidden', 403);
        }

        $team->setAttribute('accepted', true);
        $team->setAttribute('waitlisted', false);
        $team->setAttribute('rejected', false);
        $team->setAttribute('forms_deadline',  Carbon::now()->addWeek()->format('Y-m-d'));

        if ($team->save()) {
            return response('Success',200);
        }

        return response('Internal Server Error',500);
    }

    /**
     * Waitlist a Team and its Registration.
     *
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function waitlistRegistration(Team $team) {

        if (!$team->active) {
            return response('Forbidden', 403);
        }

        $team->setAttribute('waitlisted', true);
        $team->setAttribute('accepted', false);
        $team->setAttribute('rejected', false);
        $team->setAttribute('forms_deadline',  null);

        if ($team->save()) {
            return response('Success',200);
        }

        return response('Internal Server Error',500);
    }

    /**
     * Reject a Team and its Registration.
     *
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function rejectRegistration(Team $team) {

        if (!$team->active) {
            return response('Forbidden', 403);
        }

        $team->setAttribute('rejected', true);
        $team->setAttribute('accepted', false);
        $team->setAttribute('waitlisted', false);
        $team->setAttribute('forms_deadline',  null);

        if ($team->save()) {
            return response('Success',200);
        }

        return response('Internal Server Error',500);
    }

    /**
     * Approve the waivers a team has uploaded. Dispatch completion email.
     *
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function approveWaivers(Team $team) {

        if (!$team->active) {
            return response('Forbidden', 403);
        }

        if ($team->forms_reviewed || !$team->accepted) {
            return response('Internal Server Error',500);
        }

        $team->setAttribute('forms_reviewed', true);

        if ($team->save()) {

            $data = json_decode($team->registration->data);

            $advisorEmail = $data->advisor->email;
            $teamCaptainEmail = $data->team_captain->email;

            // Send the registration complete email.
            Mail::to([$teamCaptainEmail, $advisorEmail])->send(new RegistrationComplete($team));

            return response('Success',200);
        }

        return response('Internal Server Error',500);
    }

    /**
     * Replace a waiver for the given Team.
     *
     * @param Request $request
     * @param Team $team
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function replaceWaiver(Request $request, Team $team) {

        if (!$team->active) {
            return response('Forbidden', 403);
        }

        if (!$team->accepted) {
            return response('Internal Server Error',500);
        }

        $this->validate($request, [
            'id' => 'required',
            'waiver' => 'required|file|mimes:pdf'
        ]);

        $data = json_decode($team->forms_data);
        $id = $request->input('id');
        $directory = 'waivers/' . $team->team_id_code;

        if ($id === 'advisor' && Storage::exists($data->advisor->path)) {
            Storage::delete($data->advisor->path);
            $data->advisor->path = $request->file('waiver')->store($directory);
            $data->advisor->original = $request->file('waiver')->getClientOriginalName();
        } elseif ($id === 'tc' && Storage::exists($data->team_captain->path)) {
            Storage::delete($data->team_captain->path);
            $data->team_captain->path = $request->file('waiver')->store($directory);
            $data->team_captain->original = $request->file('waiver')->getClientOriginalName();
        } elseif ($id === 't1' && Storage::exists($data->team_member_1->path)) {
            Storage::delete($data->team_member_1->path);
            $data->team_member_1->path = $request->file('waiver')->store($directory);
            $data->team_member_1->original = $request->file('waiver')->getClientOriginalName();
        } elseif ($id === 't2' && Storage::exists($data->team_member_2->path)) {
            Storage::delete($data->team_member_2->path);
            $data->team_member_2->path = $request->file('waiver')->store($directory);
            $data->team_member_2->original = $request->file('waiver')->getClientOriginalName();
        } elseif ($id === 't3' && Storage::exists($data->team_member_3->path)) {
            Storage::delete($data->team_member_3->path);
            $data->team_member_3->path = $request->file('waiver')->store($directory);
            $data->team_member_3->original = $request->file('waiver')->getClientOriginalName();
        } else {
            return response('Internal Server Error',500);
        }

        $team->forms_data = json_encode($data);

        if ($team->save()) {
            return response('Success',200);
        }

        return response('Internal Server Error',500);
    }

    /**
     * Set all "active" flags for current teams to false.
     *
     * @return \Illuminate\Http\Response
     */
    public function archiveTeams() {

        $teams = Team::where('active', '=', true)->get();
        foreach($teams as $team) {
            $team->active = false;
            if (!$team->save()) {
                return response('Internal Server Error',500);
            }
        }

        return response('Success',200);
    }
}