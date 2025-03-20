<?php

namespace App\Jobs;

use App\Mail\FarewellEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendFarewellEmail implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue, SerializesModels;

    public string $email;
    public string $name;

    /**
     * Create a new job instance.
     */
    public function __construct(string $email, string $name)
    {
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new FarewellEmail($this->name));
    }
}
