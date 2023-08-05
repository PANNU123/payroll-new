<?php

namespace Modules\Religion\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Religion;

class ReligionDatabaseSeeder extends Seeder
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
         * Religions Seed
         * ------------------
         */

        // DB::table('religions')->truncate();
        // echo "Truncate: religions \n";

        Religion::factory()->count(20)->create();
        $rows = Religion::all();
        echo " Insert: religions \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
