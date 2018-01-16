<?php

namespace App\Jobs;

use App\Mail\EmailConfirmation;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\{
    Mail
};

class SendConfirmationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new job instance.
     *
     * @param $user
     */
    public function __construct($user)
    {
        //
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new EmailConfirmation($this->user);
        Mail::to($this->user->email)->send($email);
//        Mail::to($this->user->email)->subject('Notificación de Activación de Cuenta en EXPOEDUCAR')->send($email);
        //Mail::to($this->user)->send(new TokenMail($this));
    }
}
