<?php

namespace Modules\ManageDepartment\Console\Commands;

use Illuminate\Console\Command;

class ManageDepartmentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ManageDepartmentCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ManageDepartment Command description';

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
