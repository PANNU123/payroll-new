<?php

namespace Modules\ManageShift\Console\Commands;

use Illuminate\Console\Command;

class ManageShiftCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ManageShiftCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ManageShift Command description';

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
