<?php

namespace App\Http\Requests;

use App\Contact;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required|max:1500'
        ];
    }

    /**
     * Creates and saves a new contact model. Returns true if successful.
     *
     * @return bool
     */
    public function persist() {

        $contact = new Contact();
        $contact->setAttribute('firstname', $this->input('first_name'));
        $contact->setAttribute('lastname', $this->input('last_name'));
        $contact->setAttribute('email', $this->input('email'));
        $contact->setAttribute('subject', $this->input('subject'));
        $contact->setAttribute('message', $this->input('message'));

        return $contact->save();
    }
}
