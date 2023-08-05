<?php

namespace Modules\ManageHoliday\Console\Commands;

use Illuminate\Console\Command;

class ManageHolidayCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ManageHolidayCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ManageHoliday Command description';

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
