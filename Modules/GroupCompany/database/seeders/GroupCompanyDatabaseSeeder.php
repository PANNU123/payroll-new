<?php

namespace Modules\GroupCompany\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\GroupCompany;

class GroupCompanyDatabaseSeeder extends Seeder
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
         * GroupCompanies Seed
         * ------------------
         */

        // DB::table('groupcompanies')->truncate();
        // echo "Truncate: groupcompanies \n";

        GroupCompany::factory()->count(20)->create();
        $rows = GroupCompany::all();
        echo " Insert: groupcompanies \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
