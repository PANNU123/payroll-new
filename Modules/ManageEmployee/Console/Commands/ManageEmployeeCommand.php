<?php

namespace Modules\ManageEmployee\Console\Commands;

use Illuminate\Console\Command;

class ManageEmployeeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ManageEmployeeCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ManageEmployee Command description';

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
