<?php

namespace Modules\WorkingStatus\Console\Commands;

use Illuminate\Console\Command;

class WorkingStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:WorkingStatusCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'WorkingStatus Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
