<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

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

    /**
     * Validates and stores the new contact request in the database.
     *
     * @param ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request) {

        if ($request->persist()) {
            return response('Success',200);
        }

        return response()->json(['message' => 'Please try again later. If problem persists, send an email to nuecontournament@gmail.com.'], 500);
    }
}
