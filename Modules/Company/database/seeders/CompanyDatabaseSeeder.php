<?php

namespace Modules\Company\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Company;

class CompanyDatabaseSeeder extends Seeder
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
         * Companies Seed
         * ------------------
         */

        // DB::table('companies')->truncate();
        // echo "Truncate: companies \n";

        Company::factory()->count(20)->create();
        $rows = Company::all();
        echo " Insert: companies \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
