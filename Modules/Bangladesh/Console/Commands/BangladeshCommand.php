<?php

namespace Modules\Bangladesh\Console\Commands;

use Illuminate\Console\Command;

class BangladeshCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:BangladeshCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bangladesh Command description';

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
