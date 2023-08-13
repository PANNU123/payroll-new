<?php

namespace Modules\LeaveRegister\Console\Commands;

use Illuminate\Console\Command;

class LeaveRegisterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:LeaveRegisterCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'LeaveRegister Command description';

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
