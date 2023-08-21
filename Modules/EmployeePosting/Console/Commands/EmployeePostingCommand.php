<?php

namespace Modules\EmployeePosting\Console\Commands;

use Illuminate\Console\Command;

class EmployeePostingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:EmployeePostingCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'EmployeePosting Command description';

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
