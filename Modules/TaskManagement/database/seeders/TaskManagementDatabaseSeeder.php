<?php

namespace Modules\TaskManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\TaskManagement;

class TaskManagementDatabaseSeeder extends Seeder
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
         * TaskManagements Seed
         * ------------------
         */

        // DB::table('taskmanagements')->truncate();
        // echo "Truncate: taskmanagements \n";

        TaskManagement::factory()->count(20)->create();
        $rows = TaskManagement::all();
        echo " Insert: taskmanagements \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
