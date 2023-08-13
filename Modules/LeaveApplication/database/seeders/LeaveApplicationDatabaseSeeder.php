<?php

namespace Modules\LeaveApplication\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\LeaveApplication;

class LeaveApplicationDatabaseSeeder extends Seeder
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
         * LeaveApplications Seed
         * ------------------
         */

        // DB::table('leaveapplications')->truncate();
        // echo "Truncate: leaveapplications \n";

        LeaveApplication::factory()->count(20)->create();
        $rows = LeaveApplication::all();
        echo " Insert: leaveapplications \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
