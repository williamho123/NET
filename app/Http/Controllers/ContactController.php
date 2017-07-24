<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required|max:1500'
        ]);

        $contact = new Contact();
        $contact->firstname = $request->input('first_name');
        $contact->lastname = $request->input('last_name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        if ($contact->save()) {
            return response('Success',200);
        }

        return response()->json(['message' => 'Please try again later. If problem persists, send an email to nuecontournament@gmail.com.'], 500);
    }
}
