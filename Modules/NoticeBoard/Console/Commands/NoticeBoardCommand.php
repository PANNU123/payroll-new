<?php

namespace Modules\NoticeBoard\Console\Commands;

use Illuminate\Console\Command;

class NoticeBoardCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:NoticeBoardCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'NoticeBoard Command description';

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
