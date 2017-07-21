<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Shows the status page.
     *
     * @return \Illuminate\View\View
     */
    public function index() {

        return view('status.index');
    }
}
