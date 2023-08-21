<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Company\Models\Company;
use Modules\GroupCompany\Models\GroupCompany;
use Modules\LeaveCategory\Models\LeaveCategory;
use Modules\LeaveRegister\Models\LeaveRegister;
use Modules\ManageDepartment\Models\ManageDepartment;
use Modules\ManageDesignation\Models\ManageDesignation;
use Modules\Religion\Models\Religion;
use Modules\Title\Models\Title;
use Modules\WorkingStatus\Models\WorkingStatus;

class HrmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // group company
        GroupCompany::create([
            'country'=>'Bangladesh',
            'name'=>'Team Corp Ltd',
            'address'=>'Dhaka',
            'city'=>'Dhaka',
        ]);
        //end group company
        // company
        Company::create([
            'group_company_id'=>1,
            'country'=>'Khulna',
            'name'=>'Company A',
            'address'=>'Khulna',
            'city'=>'Khulna',
        ]);
        Company::create([
            'group_company_id'=>1,
            'country'=>'Jessore',
            'name'=>'Company B',
            'address'=>'Jessore',
            'city'=>'Jessore',
        ]);
        //end company
        //manage department
        ManageDepartment::create([
            'company_id'=>1,
            'user_id'=>1,
            'name'=>'Department A',
            'short_name'=>'A',
        ]);
        //end department
        //manage designation
        ManageDesignation::create([
            'company_id'=>1,
            'user_id'=>1,
            'name'=>'Software Engineer',
            'short_name'=>'SE',
            'designation_code'=>001
        ]);
        //end designation

        //manage title
        ManageDesignation::create([
            'company_id'=>1,
            'user_id'=>1,
            'name'=>'Frontend Design',
            'short_name'=>'FD',
            'designation_code'=>001
        ]);
        //end title

        //manage title
        Title::create([
            'company_id'=>1,
            'user_id'=>1,
            'name'=>'Mr',
        ]);
        //end title


        //manage title
        Religion::create([
            'user_id'=>1,
            'name'=>'Islam',
        ]);
        Religion::create([
            'user_id'=>1,
            'name'=>'Hindu',
        ]);
        Religion::create([
            'user_id'=>1,
            'name'=>'buddha',
        ]);
        Religion::create([
            'user_id'=>1,
            'name'=>'kristen',
        ]);

        LeaveCategory::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Casual',
            'short_code'=>'Cas',
        ]);
        LeaveCategory::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Sick',
            'short_code'=>'Si',
        ]);
        LeaveCategory::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Earn',
            'short_code'=>'Ea',
        ]);
        LeaveCategory::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Alternative',
            'short_code'=>'Alt',
        ]);
        LeaveCategory::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Maternity',
            'short_code'=>'Mat',
        ]);
        LeaveCategory::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Training',
            'short_code'=>'Trn',
        ]);
        LeaveCategory::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Special',
            'short_code'=>'Spe',
        ]);
        LeaveCategory::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Without Pay Leave',
            'short_code'=>'WPL',
        ]);

        WorkingStatus::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Regular',
        ]);
        WorkingStatus::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Provisional',
        ]);
        WorkingStatus::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Contractual',
        ]);
        WorkingStatus::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Resigned',
        ]);
        WorkingStatus::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Dismissed',
        ]);
        WorkingStatus::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Discontinued',
        ]);

        LeaveRegister::create([
            'company_id'=>1,
            'leave_year'=>Carbon::now(),
            'user_id'=>1,
            'leave_id'=>1,
            'leave_eligible'=>10,
            'leave_enjoyed'=>5,
            'leave_balance'=>5,
        ]);

        $path = public_path('bangladesh.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
        //end title
    }
}
