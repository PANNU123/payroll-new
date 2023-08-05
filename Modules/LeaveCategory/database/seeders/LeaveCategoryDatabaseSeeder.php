<?php

namespace Modules\LeaveCategory\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\LeaveCategory;

class LeaveCategoryDatabaseSeeder extends Seeder
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
         * LeaveCategories Seed
         * ------------------
         */

        // DB::table('leavecategories')->truncate();
        // echo "Truncate: leavecategories \n";

        LeaveCategory::factory()->count(20)->create();
        $rows = LeaveCategory::all();
        echo " Insert: leavecategories \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
