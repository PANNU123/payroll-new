<?php

namespace Modules\NoticeBoard\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\NoticeBoard;

class NoticeBoardDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * NoticeBoards Seed
         * ------------------
         */

        // DB::table('noticeboards')->truncate();
        // echo "Truncate: noticeboards \n";

        NoticeBoard::factory()->count(20)->create();
        $rows = NoticeBoard::all();
        echo " Insert: noticeboards \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
