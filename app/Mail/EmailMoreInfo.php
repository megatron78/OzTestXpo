<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailMoreInfo extends Mailable
{
    use Queueable, SerializesModels;

    protected $contactinfo;

    /**
     * EmailMoreInfo constructor.
     * @param $contactinfo
     */
    public function __construct($contactinfo)
    {
        $this->contactinfo = $contactinfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->user->email_token);
        return $this->view('emailmoreinfo')->with([
            'contactinfo' => $this->contactinfo,
        ]);
    }
}
