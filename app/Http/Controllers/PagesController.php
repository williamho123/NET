<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    /**
     * Shows the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index() {

        return view('home');
    }

    /**
     * Shows the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about() {

        return view('about');
    }

    /**
     * Shows the bio page.
     *
     * @return \Illuminate\View\View
     */
    public function bios() {

        return view('bios');
    }

    /**
     * Shows the logistics page.
     *
     * @return \Illuminate\View\View
     */
    public function logistics() {

        return view('tournament.logistics');
    }

    /**
     * Shows the sample questions page.
     *
     * @return \Illuminate\View\View
     */
    public function questions() {

        return view('tournament.questions');
    }

    /**
     * Shows the rules page.
     *
     * @return \Illuminate\View\View
     */
    public function rules() {

        return view('tournament.rules');
    }

    /**
     * Shows the speakers page.
     *
     * @return \Illuminate\View\View
     */
    public function speakers() {

        return view('tournament.speakers');
    }
}
