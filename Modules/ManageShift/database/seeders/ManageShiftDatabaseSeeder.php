<?php

namespace Modules\ManageShift\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\ManageShift;

class ManageShiftDatabaseSeeder extends Seeder
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
         * ManageShifts Seed
         * ------------------
         */

        // DB::table('manageshifts')->truncate();
        // echo "Truncate: manageshifts \n";

        ManageShift::factory()->count(20)->create();
        $rows = ManageShift::all();
        echo " Insert: manageshifts \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
