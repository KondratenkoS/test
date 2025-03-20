<?php

namespace App\Jobs;

use App\Mail\RetirementNotificationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendRetirementEmailJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;


    public string $message;
    /**
     * Create a new job instance.
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $email = config('settings.admin_email'); // дістаэмо email адміна з конфігу

        Mail::to($email)->send(new RetirementNotificationMail($this->message));

    }
}
