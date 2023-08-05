<?php

namespace Modules\ManageReference\Console\Commands;

use Illuminate\Console\Command;

class ManageReferenceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ManageReferenceCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ManageReference Command description';

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
