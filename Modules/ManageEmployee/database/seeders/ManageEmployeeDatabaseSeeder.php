<?php

namespace Modules\ManageEmployee\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\ManageEmployee;

class ManageEmployeeDatabaseSeeder extends Seeder
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
         * ManageEmployees Seed
         * ------------------
         */

        // DB::table('manageemployees')->truncate();
        // echo "Truncate: manageemployees \n";

        ManageEmployee::factory()->count(20)->create();
        $rows = ManageEmployee::all();
        echo " Insert: manageemployees \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
