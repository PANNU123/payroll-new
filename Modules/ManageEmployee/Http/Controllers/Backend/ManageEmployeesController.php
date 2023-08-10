<?php

namespace Modules\ManageEmployee\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Bank\Models\Bank;
use Modules\Company\Models\Company;
use Modules\GroupCompany\Models\GroupCompany;
use Modules\ManageDepartment\Models\ManageDepartment;
use Modules\ManageDesignation\Models\ManageDesignation;
use Modules\ManageEmployee\Models\ManageEmployee;
use Modules\ManageEmployee\Models\ProfessionalEmployee;
use Modules\Religion\Models\Religion;
use Modules\Section\Models\Section;
use Modules\Title\Models\Title;
use Modules\WorkingStatus\Models\WorkingStatus;
use Yajra\DataTables\DataTables;

class ManageEmployeesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Employee Information';

        // module name
        $this->module_name = 'manageemployees';

        // directory path of the module
        $this->module_path = 'manageemployee::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ManageEmployee\Models\ManageEmployee";
        $this->module_user_model = "App\Models\User";
    }

    public function index_list(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $term = trim($request->q);

        if (empty($term)) {
            return response()->json([]);
        }

        $query_data = $module_model::where('name', 'LIKE', "%$term%")->orWhere('slug', 'LIKE', "%$term%")->limit(7)->get();

        $$module_name = [];

        foreach ($query_data as $row) {
            $$module_name[] = [
                'id' => $row->id,
                'text' => $row->name.' (Slug: '.$row->slug.')',
            ];
        }

        return response()->json($$module_name);
    }

    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_user_model = $this->module_user_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = label_case($module_title);
        $title = $page_heading.' '.label_case($module_action);

        $$module_name = $module_user_model::select('id', 'name', 'updated_at');

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                    $btn = '<a href="'.route('backend.'.$this->module_name.'.edit',$data->id).'" class="btn btn-success btn-sm"><i class="fas fa-wrench"></i></a>';
//                    $btn = '<a href="" class="btn btn-success btn-sm"><i class="fas fa-wrench""></i></a>';
                return $btn;
            })
            ->editColumn('name', '<strong>{{$name}}</strong>')
            ->editColumn('updated_at', function ($data) {
                $module_name = $this->module_name;

                $diff = Carbon::now()->diffInHours($data->updated_at);

                if ($diff < 25) {
                    return $data->updated_at->diffForHumans();
                } else {
                    return $data->updated_at->isoFormat('llll');
                }
            })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }


    public function edit($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_user_model = $this->module_user_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $$module_name_singular = $module_user_model::findOrFail($id);

        $companies = Company::select('id','name')->get();
        $users = User::select('id','name')->get();
        $titles = Title::select('id','name')->get();
        $religions = Religion::select('id','name')->get();

        $manage_department = ManageDepartment::select('id','name')->get();
        $section = Section::select('id','name')->get();
        $manage_designation = ManageDesignation::select('id','name')->get();
        $working_status = WorkingStatus::select('id','name')->get();
        $banks = Bank::select('id','name')->get();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return view(
            "$module_path.$module_name.edit",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular',
                "$module_name_singular",'companies','users','titles','religions','manage_designation','manage_department','section','working_status','banks')
        );
    }


    public function update(Request $request, $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Update';

        DB::beginTransaction();

        try {
//          pd = personal data
            ManageEmployee::updateOrInsert(
                [
                    'user_id'=>$request->user_id,
                ],
                [
                    'company_id'=>$request->company_id,
                    'user_id'=>$request->user_id,
                    'title_id'=>$request->title_id,
                    'religion_id'=>$request->religion_id,
                    'signature'=>$request->signature,
                    'pr_address'=>$request->pr_address,
                    'pr_district'=>$request->pr_district,
                    'pr_police_station'=>$request->pr_police_station,
                    'pr_post_code'=>$request->pr_post_code,
                    'pm_address'=>$request->pm_address,
                    'pm_district'=>$request->pm_district,
                    'pm_police_station'=>$request->pm_police_station,
                    'pm_post_code'=>$request->pm_post_code,
                    'm_address'=>$request->m_address,
                    'm_district'=>$request->m_district,
                    'm_police_station'=>$request->m_police_station,
                    'm_post_code'=>$request->m_post_code,
                    'biography'=>$request->biography,
                    'father_name'=>$request->father_name,
                    'mother_name'=>$request->mother_name,
                    'spouse_name'=>$request->spouse_name,
                    'blood_group'=>$request->blood_group,
                    'last_education'=>$request->last_education,
                    'prof_speciality'=>$request->prof_speciality,
                    'national_id'=>$request->national_id,
                    'is_printed'=>$request->is_printed,
                    'status'=>$request->status,
                ]
            );
            $pd= ManageEmployee::where('user_id', $request->user_id)->first();
            if($pd){
                ProfessionalEmployee::updateOrInsert(
                    [
                        'emp_personals_id'=>$pd->id,
                    ],
                    [
                        'emp_personals_id'=>$request->emp_personals_id,
                        'department_id'=>$request->department_id,
                        'section_id'=>$request->section_id,
                        'designation_id'=>$request->designation_id,
                        'working_status_id'=>$request->working_status_id,
                        'bank_id'=>$request->bank_id,
                        'pf_no'=>$request->pf_no,
                        'report_to'=>$request->report_to,
                        'joining_date'=>$request->joining_date,
                        'card_no'=>$request->card_no,
                        'card_printed'=>$request->card_printed,
                        'overtime'=>$request->overtime,
                        'overtime_note'=>$request->overtime_note,
                        'transport'=>$request->transport,
                        'transport_note'=>$request->transport_note,
                        'pay_schale'=>$request->pay_schale,
                        'pay_grade'=>$request->pay_grade,
                        'confirm_probation'=>$request->confirm_probation,
                        'confirm_period'=>$request->confirm_period,
                        'bank_acc_no'=>$request->bank_acc_no,
                        'status_change_date'=>$request->status_change_date,
                    ]
                );
            }
            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }
        flash(icon().' '.Str::singular($module_title)."' Updated Successfully")->success()->important();
        return redirect()->route('backend.'.$this->module_name.'.index');

//        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

//        return redirect()->route("backend.$module_name.show", $$module_name_singular->id);
    }


}
