<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * Shows the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function index() {

        return view('contact');
    }
}
