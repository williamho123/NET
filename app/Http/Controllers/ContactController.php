<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;
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
     * Dispatches the notification email to the default queue for sending.
     *
     * @param ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request) {

        $contact = $request->persist();

        if ($contact) {
            Mail::to(env('ADMIN_EMAIL'))->send(new ContactUs($contact));

            return response('Success',200);
        }

        return response('Internal Server Error', 500);
    }
}
