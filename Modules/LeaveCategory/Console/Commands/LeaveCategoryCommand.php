<?php

namespace Modules\LeaveCategory\Console\Commands;

use Illuminate\Console\Command;

class LeaveCategoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:LeaveCategoryCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'LeaveCategory Command description';

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
