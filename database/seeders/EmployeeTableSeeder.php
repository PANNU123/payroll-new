<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\ManageEmployee\Models\ManageEmployee;
use Modules\ManageEmployee\Models\ProfessionalEmployee;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $pd = ManageEmployee::create([
            'company_id'=>1,
            'user_id'=>1,
            'title_id'=>1,
            'religion_id'=>1,
            'signature'=>'signature.png',
            'pr_address'=>'Mirpur-12',
            'pr_district'=>'Dhaka',
            'pr_police_station'=>'Mirpur-12',
            'pr_post_code'=>1216,
            'pm_address'=>'Mirpur-12',
            'pm_district'=>'Dhaka',
            'pm_police_station'=>'Mirpur-12',
            'pm_post_code'=>1216,
            'm_address'=>'Mirpur-12',
            'm_district'=>'Dhaka',
            'm_police_station'=>'Mirpur-12',
            'm_post_code'=>1216,
            'biography'=>'I am a student',
            'father_name'=>'Md Afsar Ali',
            'mother_name'=>'Mst Rekha bagum',
            'spouse_name'=>'N/A',
            'blood_group'=>'AB+',
            'last_education'=>"Bsc in cse",
            'prof_speciality'=>'Laravel',
            'national_id'=>12345,
            'created_by'=>1,
        ]);
        ProfessionalEmployee::updateOrInsert([
            'user_id'=>1,
            'department_id'=>1,
            'designation_id'=>1,
            'working_status_id'=>1,
            'pf_no'=>12,
            'report_to'=>1,
            'joining_date'=>$faker->date,
            'pay_grade'=>"1234",
            'bank_acc_no'=>"adsfasdf",
            'created_by'=>1,
        ]);
    }
}
