<?php

namespace Blog\Ui\Cli\Commands;

use Illuminate\Console\Command;

class ContainerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'container:example';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is just an example of command';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Hey, I'm a container command example.");
    }
}