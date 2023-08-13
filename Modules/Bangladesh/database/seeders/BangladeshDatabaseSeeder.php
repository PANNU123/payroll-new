<?php

namespace Modules\Bangladesh\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Bangladesh;

class BangladeshDatabaseSeeder extends Seeder
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
         * Bangladeshes Seed
         * ------------------
         */

        // DB::table('bangladeshes')->truncate();
        // echo "Truncate: bangladeshes \n";

        Bangladesh::factory()->count(20)->create();
        $rows = Bangladesh::all();
        echo " Insert: bangladeshes \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
