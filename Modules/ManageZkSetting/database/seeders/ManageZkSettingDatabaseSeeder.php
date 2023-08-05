<?php

namespace Modules\ManageZkSetting\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\ManageZkSetting;

class ManageZkSettingDatabaseSeeder extends Seeder
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
         * ManageZkSettings Seed
         * ------------------
         */

        // DB::table('managezksettings')->truncate();
        // echo "Truncate: managezksettings \n";

        ManageZkSetting::factory()->count(20)->create();
        $rows = ManageZkSetting::all();
        echo " Insert: managezksettings \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
