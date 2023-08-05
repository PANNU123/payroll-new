<?php

namespace Modules\ManageReport\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\ManageReport;

class ManageReportDatabaseSeeder extends Seeder
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
         * ManageReports Seed
         * ------------------
         */

        // DB::table('managereports')->truncate();
        // echo "Truncate: managereports \n";

        ManageReport::factory()->count(20)->create();
        $rows = ManageReport::all();
        echo " Insert: managereports \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
