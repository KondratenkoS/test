<?php

namespace App\Jobs;

use App\Services\TurboSmsService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendRetirementSmsJob implements ShouldQueue
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
        $adminPhone = config('settings.admin_phone'); // дістаэмо номер адміна з конфігу
        (new TurboSmsService())->send($adminPhone, $this->message);
    }
}
