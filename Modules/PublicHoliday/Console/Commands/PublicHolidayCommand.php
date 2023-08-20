<?php

namespace Modules\PublicHoliday\Console\Commands;

use Illuminate\Console\Command;

class PublicHolidayCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:PublicHolidayCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'PublicHoliday Command description';

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
