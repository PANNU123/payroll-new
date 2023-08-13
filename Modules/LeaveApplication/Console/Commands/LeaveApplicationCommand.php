<?php

namespace Modules\LeaveApplication\Console\Commands;

use Illuminate\Console\Command;

class LeaveApplicationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:LeaveApplicationCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'LeaveApplication Command description';

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
