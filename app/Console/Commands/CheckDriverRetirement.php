<?php

namespace App\Console\Commands;

use App\Jobs\SendRetirementEmailJob;
use App\Jobs\SendRetirementSmsJob;
use App\Models\Driver;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckDriverRetirement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'drivers:check-retirement'; // для виклику у консолі - php artisan drivers:check-retirement

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Перевірка водіїв, яким виповнилося 65 років, і логіка виходу на пенсію';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $drivers = Driver::with('bus')
            ->whereDate('birth_date', '<=', now()->subYears(65)) // перевіряємо вік
            ->get();

        foreach ($drivers as $driver)
        {
            DB::transaction(function () use ($driver)
            {
                $driver->delete();

                // optional перевірить якщо за водієм не закріплено автобус
                $busNumber = optional($driver->bus)->car_number ?? 'Невідомий';
                $message = "Водій {$driver->name}, сьогодні вийшов на пенсію.
                    Автобус, номерний знак якого {$busNumber} залишився без водія";

                // Надсилаємо SMS через 5 хвилин
                SendRetirementSmsJob::dispatch($message)->delay(now()->addMinutes(5));
                // Надсилаємо EMAIL через 15 хвилин
                SendRetirementEmailJob::dispatch($message)->delay(now()->addMinutes(15));
            });
        }
    }
}
