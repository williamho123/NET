<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {

        return Auth::guard('admin')->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'username' => 'required|string',
            'password' => 'required|string'
        ];
    }

    /**
     * Attempts to login the administrator and redirect to intended URI.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginWithRedirect() {

        $credentials = [
            'username' => $this->input('username'),
            'password' => $this->input('password')
        ];

        if (!Auth::guard('admin')->attempt($credentials)) {
            return redirect()->back()->withErrors(['message' => 'Incorrect username or password.']);
        }

        return redirect()->intended('/admin');
    }
}
