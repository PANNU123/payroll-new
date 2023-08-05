<?php

namespace Modules\ManageDesignation\Console\Commands;

use Illuminate\Console\Command;

class ManageDesignationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ManageDesignationCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ManageDesignation Command description';

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
