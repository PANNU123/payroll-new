<?php

namespace Modules\LeaveRegister\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\LeaveRegister;

class LeaveRegisterDatabaseSeeder extends Seeder
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
         * LeaveRegisters Seed
         * ------------------
         */

        // DB::table('leaveregisters')->truncate();
        // echo "Truncate: leaveregisters \n";

        LeaveRegister::factory()->count(20)->create();
        $rows = LeaveRegister::all();
        echo " Insert: leaveregisters \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
