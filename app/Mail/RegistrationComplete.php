<?php

namespace App\Mail;

use App\Team;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationComplete extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The Team instance.
     *
     * @var
     */
    public $team;

    /**
     * Create a new message instance.
     *
     * @param Team $team
     */
    public function __construct(Team $team) {

        $this->team = $team;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {

        return $this->from(env('ADMIN_EMAIL_NOTIF'), 'NET Team')
                    ->replyTo(env('ADMIN_EMAIL'))
                    ->subject('Northwestern Economics Tournament: Registration Complete for ' . $this->team->school)
                    ->markdown('emails.registration.complete');
    }
}
