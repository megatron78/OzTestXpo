<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailAlertaVenta extends Mailable
{
    use Queueable, SerializesModels;

    protected $user, $institution;

    /**
     * EmailAlertaVenta constructor.
     * @param $user
     * @param $institution
     */
    public function __construct($user, $institution)
    {
        $this->user = $user;
        $this->institution = $institution;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->user->email_token);
        return $this->view('emailalertaventa')->with([
            'user' => $this->user,
            'institution' => $this->institution,
        ]);
    }
}
