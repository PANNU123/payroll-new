<?php

namespace Modules\ManageDepartment\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\ManageDepartment;

class ManageDepartmentDatabaseSeeder extends Seeder
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
         * ManageDepartments Seed
         * ------------------
         */

        // DB::table('managedepartments')->truncate();
        // echo "Truncate: managedepartments \n";

        ManageDepartment::factory()->count(20)->create();
        $rows = ManageDepartment::all();
        echo " Insert: managedepartments \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
