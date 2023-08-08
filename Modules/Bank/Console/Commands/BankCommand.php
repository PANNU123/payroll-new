<?php

namespace Modules\Bank\Console\Commands;

use Illuminate\Console\Command;

class BankCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:BankCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bank Command description';

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
