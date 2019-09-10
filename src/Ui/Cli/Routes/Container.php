<?php

namespace Blog\Ui\Cli\Routes;

use Illuminate\Console\Application as Artisan;
use Illuminate\Console\Scheduling\Schedule;
use Skeleton\Abstracts\Router\ConsoleRouter;
use Skeleton\Container\Ui\Cli\Commands\ContainerCommand;

class Container extends ConsoleRouter
{
    /**
     * @param Artisan $artisan
     * @return void
     */
    public function map(Artisan $artisan)
    {
        $artisan->resolveCommands(ContainerCommand::class);
    }

    /**
     * @param Schedule $schedule
     */
    public function schedule(Schedule $schedule)
    {
        $schedule->command('container:example')->everyMinute();
    }
}