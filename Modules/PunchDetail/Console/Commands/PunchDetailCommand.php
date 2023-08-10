<?php

namespace Modules\PunchDetail\Console\Commands;

use Illuminate\Console\Command;

class PunchDetailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:PunchDetailCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'PunchDetail Command description';

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
