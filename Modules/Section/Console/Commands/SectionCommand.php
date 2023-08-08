<?php

namespace Modules\Section\Console\Commands;

use Illuminate\Console\Command;

class SectionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SectionCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Section Command description';

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
