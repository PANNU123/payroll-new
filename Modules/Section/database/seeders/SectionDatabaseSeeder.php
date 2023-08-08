<?php

namespace Modules\Section\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Section;

class SectionDatabaseSeeder extends Seeder
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
         * Sections Seed
         * ------------------
         */

        // DB::table('sections')->truncate();
        // echo "Truncate: sections \n";

        Section::factory()->count(20)->create();
        $rows = Section::all();
        echo " Insert: sections \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
