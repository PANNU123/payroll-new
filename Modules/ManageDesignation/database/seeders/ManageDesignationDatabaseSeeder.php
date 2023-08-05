<?php

namespace Modules\ManageDesignation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\ManageDesignation;

class ManageDesignationDatabaseSeeder extends Seeder
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
         * ManageDesignations Seed
         * ------------------
         */

        // DB::table('managedesignations')->truncate();
        // echo "Truncate: managedesignations \n";

        ManageDesignation::factory()->count(20)->create();
        $rows = ManageDesignation::all();
        echo " Insert: managedesignations \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
