<?php

namespace Modules\SetWorkingDay\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\SetWorkingDay;

class SetWorkingDayDatabaseSeeder extends Seeder
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
         * SetWorkingDays Seed
         * ------------------
         */

        // DB::table('setworkingdays')->truncate();
        // echo "Truncate: setworkingdays \n";

        SetWorkingDay::factory()->count(20)->create();
        $rows = SetWorkingDay::all();
        echo " Insert: setworkingdays \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
