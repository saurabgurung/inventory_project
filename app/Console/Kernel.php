<?php

namespace App\Console;

use App\Console\Commands\RestockCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\RestockCommand::class,
    ];


    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
     * @return void
     */
    // app/Console/Kernel.php

    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('app:restock-command')->everyMinute();
    }



    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
