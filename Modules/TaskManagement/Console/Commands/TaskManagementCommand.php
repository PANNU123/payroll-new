<?php

namespace Modules\TaskManagement\Console\Commands;

use Illuminate\Console\Command;

class TaskManagementCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TaskManagementCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'TaskManagement Command description';

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
