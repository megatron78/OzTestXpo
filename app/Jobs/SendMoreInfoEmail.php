<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\EmailMoreInfo;
use Illuminate\Support\Facades\{Mail, Auth};

class SendMoreInfoEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $contactinfo;

    /**
     * Create a new job instance.
     *
     * @param $contactinfo
     */
    public function __construct($contactinfo)
    {
        //
        $this->contactinfo = $contactinfo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new EmailMoreInfo($this->contactinfo);
        Mail::to($this->contactinfo['email'])->send($email);
    }
}
