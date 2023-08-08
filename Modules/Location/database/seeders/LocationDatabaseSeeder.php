<?php

namespace Modules\Location\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Location;

class LocationDatabaseSeeder extends Seeder
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
         * Locations Seed
         * ------------------
         */

        // DB::table('locations')->truncate();
        // echo "Truncate: locations \n";

        Location::factory()->count(20)->create();
        $rows = Location::all();
        echo " Insert: locations \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
