<?php

namespace Modules\EmployeeEducation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\EmployeeEducation;

class EmployeeEducationDatabaseSeeder extends Seeder
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
         * EmployeeEducations Seed
         * ------------------
         */

        // DB::table('employeeeducations')->truncate();
        // echo "Truncate: employeeeducations \n";

        EmployeeEducation::factory()->count(20)->create();
        $rows = EmployeeEducation::all();
        echo " Insert: employeeeducations \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
