<?php

namespace Modules\Bank\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Bank;

class BankDatabaseSeeder extends Seeder
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
         * Banks Seed
         * ------------------
         */

        // DB::table('banks')->truncate();
        // echo "Truncate: banks \n";

        Bank::factory()->count(20)->create();
        $rows = Bank::all();
        echo " Insert: banks \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
