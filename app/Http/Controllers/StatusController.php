<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Shows the status index/login page.
     *
     * @return \Illuminate\View\View
     */
    public function index() {

        return view('status.index');
    }

    /**
     * Shows the status index/login page.
     *
     * @return \Illuminate\View\View
     */
    public function home() {

        return view('status.home');
    }
}
