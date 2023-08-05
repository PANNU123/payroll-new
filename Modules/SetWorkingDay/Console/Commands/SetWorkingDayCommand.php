<?php

namespace Modules\SetWorkingDay\Console\Commands;

use Illuminate\Console\Command;

class SetWorkingDayCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SetWorkingDayCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'SetWorkingDay Command description';

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
