<?php

namespace Modules\Title\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Title;

class TitleDatabaseSeeder extends Seeder
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
         * Titles Seed
         * ------------------
         */

        // DB::table('titles')->truncate();
        // echo "Truncate: titles \n";

        Title::factory()->count(20)->create();
        $rows = Title::all();
        echo " Insert: titles \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
