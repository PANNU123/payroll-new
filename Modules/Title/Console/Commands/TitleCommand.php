<?php

namespace Modules\Title\Console\Commands;

use Illuminate\Console\Command;

class TitleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TitleCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Title Command description';

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
