<?php

namespace Modules\Company\Console\Commands;

use Illuminate\Console\Command;

class CompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:CompanyCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Company Command description';

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
