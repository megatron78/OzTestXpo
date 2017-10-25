<?php

namespace App\Jobs;

use App\Mail\EmailAlertaVenta;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\{Mail, Auth};

class SendAlertaVentaEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user, $institution, $email;

    /**
     * EmailAlertaVenta constructor.
     * @param $user
     * @param $institution
     * @param $email
     */
    public function __construct($user, $institution, $email)
    {
        $this->user = $user;
        $this->institution = $institution;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new EmailAlertaVenta($this->user, $this->institution);
        Mail::to($this->email)->send($email);
        //Mail::to($this->user)->send(new TokenMail($this));
    }
}
