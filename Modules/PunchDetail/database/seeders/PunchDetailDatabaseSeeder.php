<?php

namespace Modules\PunchDetail\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\PunchDetail;

class PunchDetailDatabaseSeeder extends Seeder
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
         * PunchDetails Seed
         * ------------------
         */

        // DB::table('punchdetails')->truncate();
        // echo "Truncate: punchdetails \n";

        PunchDetail::factory()->count(20)->create();
        $rows = PunchDetail::all();
        echo " Insert: punchdetails \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
