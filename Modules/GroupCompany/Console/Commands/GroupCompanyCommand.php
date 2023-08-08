<?php

namespace Modules\GroupCompany\Console\Commands;

use Illuminate\Console\Command;

class GroupCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:GroupCompanyCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GroupCompany Command description';

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
