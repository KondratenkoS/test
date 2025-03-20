<?php

namespace App\Console\Commands;

use App\Models\Driver;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendSalaryNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:drivers-salary'; // команда для консолі - php artisan notify:drivers-salary

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Надсилати всім водіям електронний лист із повідомленнями про зарплату';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $drivers = Driver::whereNotNull('email')
            ->withoutTrashed()
            ->get();
        $nextMonth = now()->addMonth()->monthName;

        foreach ($drivers as $driver) {
            $salary = $driver->salary ?? 0;

            Mail::raw(
                "Ваша поточна зарплата становить {$salary} грн, не забудьте отримати її 1-го {$nextMonth}",
                function ($message) use ($driver) {
                    $message->to($driver->email)
                            ->subject('Інформація про зарплату');
            });
        }

    }
}
