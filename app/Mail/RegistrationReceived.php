<?php

namespace App\Mail;

use App\Team;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationReceived extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The Team object instance.
     *
     * @var
     */
    public $team;

    /**
     * The unhashed login password.
     *
     * @var
     */
    public $pw;

    /**
     * Create a new message instance.
     *
     * @param Team $team
     * @param $pw
     */
    public function __construct(Team $team, $pw) {

        $this->team = $team;
        $this->pw = $pw;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {

        return $this->from(env('ADMIN_EMAIL'), 'NET Team')
                    ->replyTo(env('ADMIN_EMAIL'))
                    ->subject('Northwestern Economics Tournament: Registration Received for ' . $this->team->school)
                    ->markdown('emails.registration.received');
    }
}
