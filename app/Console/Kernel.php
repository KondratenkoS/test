<?php

namespace App\Console;

use App\Console\Commands\CheckDriverRetirement;
use App\Console\Commands\SendSalaryNotification;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Всі команди для вашого додатку.
     *
     * @var array
     */
    protected $commands = [
        // реєструємо команди
        CheckDriverRetirement::class,
        SendSalaryNotification::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule): void
    {
        // виконувати команду щодня о 8:00:
        $schedule->command('drivers:check-retirement')->dailyAt('08:00');
    }

    /**
     * Зареєструйте всі команди для консольного додатку.
     *
     * @return void
     */
    protected function commands()
    {
        // Завантажуємо команди з каталогу
        $this->load(__DIR__.'/Commands');

        // Підключаємо додаткові маршрути для команд (наприклад, для web.php)
        require base_path('routes/console.php');
    }
}
