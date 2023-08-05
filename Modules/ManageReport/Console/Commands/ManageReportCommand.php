<?php

namespace Modules\ManageReport\Console\Commands;

use Illuminate\Console\Command;

class ManageReportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ManageReportCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ManageReport Command description';

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
