<?php

namespace Modules\WorkingStatus\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\WorkingStatus;

class WorkingStatusDatabaseSeeder extends Seeder
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
         * WorkingStatuses Seed
         * ------------------
         */

        // DB::table('workingstatuses')->truncate();
        // echo "Truncate: workingstatuses \n";

        WorkingStatus::factory()->count(20)->create();
        $rows = WorkingStatus::all();
        echo " Insert: workingstatuses \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
