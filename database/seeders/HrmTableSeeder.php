<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Company\Models\Company;
use Modules\GroupCompany\Models\GroupCompany;
use Modules\LeaveCategory\Models\LeaveCategory;
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

        LeaveCategory::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'Islam',
            'short_code'=>'Islam',
        ]);

        WorkingStatus::create([
            'user_id'=>1,
            'company_id'=>1,
            'name'=>'ABC',
        ]);
        //end title

    }
}
