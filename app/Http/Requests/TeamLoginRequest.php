<?php

namespace App\Http\Requests;

use App\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class TeamLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {

        return Auth::guard('team')->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'team_id_code' => 'required|string',
            'password' => 'required|string'
        ];
    }

    /**
     * Get the custom error messages for this request.
     *
     * @return array
     */
    public function messages() {

        return [
            'team_id_code.required' => 'The team ID code field is required.',
            'team_id_code.string' => 'The team ID code field must be a string.'
        ];
    }

    /**
     * Attempts to login the team and redirect to intended URI.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginWithRedirect() {

        $credentials = [
            'team_id_code' => $this->input('team_id_code'),
            'password' => $this->input('password'),
            'active' => true
        ];

        if (!Auth::guard('team')->attempt($credentials)) {

            $message = 'Incorrect Team ID Code or password.';
            $team = Team::where('team_id_code', $this->input('team_id_code'))->first();

            if ($team != null && $team->getAttribute('active') == false) {
                $message = 'Account is no longer active.';
            }

            return redirect()->back()->withErrors(['message' => $message]);
        }

        return redirect()->intended('/team');
    }
}
