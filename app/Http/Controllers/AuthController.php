<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\TeamLoginRequest;

class AuthController extends Controller
{
    /**
     * Assigns middleware to controller actions and routes.
     */
    public function __construct() {

        $this->middleware('auth:admin')->only('adminLogout');
        $this->middleware('auth:team')->only('teamLogout');
        $this->middleware('guest:admin')->only(['showAdminLogin', 'adminLogin']);
        $this->middleware('guest:team')->only(['showTeamLogin', 'teamLogin']);
    }

    /**
     * Shows the view for the admin login page.
     *
     * @return \Illuminate\View\View
     */
    public function showAdminLogin() {

        return view('auth.admin-login');
    }

    /**
     * Perform login action for the admin.
     *
     * @param AdminLoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function adminLogin(AdminLoginRequest $request) {

        return $request->loginWithRedirect();
    }

    /**
     * Logs the admin out of the application.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function adminLogout(Request $request) {

        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->to('/admin/login');
    }

    /**
     * Shows the view for the team login page.
     *
     * @return \Illuminate\View\View
     */
    public function showTeamLogin() {

        return view('auth.team-login');
    }

    /**
     * Perform login action for the team.
     *
     * @param TeamLoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function teamLogin(TeamLoginRequest $request) {

        return $request->loginWithRedirect();
    }

    /**
     * Logs the team out of the application.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function teamLogout(Request $request) {

        Auth::guard('team')->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->to('/team/login');
    }
}
