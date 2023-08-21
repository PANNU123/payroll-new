<?php

namespace Modules\EmployeeEducation\Console\Commands;

use Illuminate\Console\Command;

class EmployeeEducationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:EmployeeEducationCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'EmployeeEducation Command description';

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
