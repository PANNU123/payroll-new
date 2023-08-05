<?php

namespace Modules\ManageZkSetting\Console\Commands;

use Illuminate\Console\Command;

class ManageZkSettingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ManageZkSettingCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ManageZkSetting Command description';

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
