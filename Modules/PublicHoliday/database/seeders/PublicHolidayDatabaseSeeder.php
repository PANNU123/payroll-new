<?php

namespace Modules\PublicHoliday\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\PublicHoliday;

class PublicHolidayDatabaseSeeder extends Seeder
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
         * PublicHolidays Seed
         * ------------------
         */

        // DB::table('publicholidays')->truncate();
        // echo "Truncate: publicholidays \n";

        PublicHoliday::factory()->count(20)->create();
        $rows = PublicHoliday::all();
        echo " Insert: publicholidays \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
