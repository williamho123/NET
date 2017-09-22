<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The contact object instance.
     *
     * @var Contact
     */
    public $contact;

    /**
     * Create a new message instance.
     *
     * @param Contact $contact
     */
    public function __construct(Contact $contact) {

        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {

        return $this->from(env('ADMIN_EMAIL'))
                    ->replyTo($this->contact->email)
                    ->subject($this->contact->subject)
                    ->text('emails.contact-us');
    }
}
