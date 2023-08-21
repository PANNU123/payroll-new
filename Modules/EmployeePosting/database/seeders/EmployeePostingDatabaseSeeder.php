<?php

namespace Modules\EmployeePosting\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\EmployeePosting;

class EmployeePostingDatabaseSeeder extends Seeder
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
         * EmployeePostings Seed
         * ------------------
         */

        // DB::table('employeepostings')->truncate();
        // echo "Truncate: employeepostings \n";

        EmployeePosting::factory()->count(20)->create();
        $rows = EmployeePosting::all();
        echo " Insert: employeepostings \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
