<?php

namespace Modules\ManageHoliday\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\ManageHoliday;

class ManageHolidayDatabaseSeeder extends Seeder
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
         * ManageHolidays Seed
         * ------------------
         */

        // DB::table('manageholidays')->truncate();
        // echo "Truncate: manageholidays \n";

        ManageHoliday::factory()->count(20)->create();
        $rows = ManageHoliday::all();
        echo " Insert: manageholidays \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
