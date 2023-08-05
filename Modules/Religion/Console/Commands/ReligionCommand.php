<?php

namespace Modules\Religion\Console\Commands;

use Illuminate\Console\Command;

class ReligionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ReligionCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Religion Command description';

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
