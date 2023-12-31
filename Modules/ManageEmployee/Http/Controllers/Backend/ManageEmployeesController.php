<?php

namespace Modules\ManageEmployee\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\User;
use App\Models\Userprofile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Bangladesh\Models\Bangladesh;
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

//    public function index(){
//        return $module_name = User::with('personaldata','professionaldata','professionaldata.designation','professionaldata.department')->get();
//    }

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

        $$module_name = User::with('personaldata','professionaldata','professionaldata.designation','professionaldata.department','professionaldata.working')->latest();

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                    $btn = '<a  href="'.route('backend.'.$this->module_name.'.edit',$data->id).'" class="btn btn-primary btn-sm"><i class="fas fa-desktop"></i></a>';
                    $btn =$btn.'<a style="margin-left:3px" href="'.route('backend.'.$this->module_name.'.edit',$data->id).'" class="btn btn-info btn-sm"><i class="fas fa-wrench"></i></a>';
                    $btn = $btn.'<a style="margin-left:3px" href="'.route('backend.employeeeducations.index','data='.$data->id).'" class="btn btn-success btn-sm"><i class="fa-solid fa-book-open-reader"></i></a>';
                    $btn = $btn.'<a style="margin-left:3px" href="javascript:void(0)" class="btn btn-warning btn-sm"><i class="fa-solid fa-plane-departure"></i></a>';
                return $btn;
            })
//            ->editColumn('avatar', '<strong>Avatar</strong>')
            ->editColumn('avatar', function ($data) {
                $url = asset(ProfileImage() . $data->avatar);
                return '<img src=' . $url . ' border="0" width="40" class="img-rounded" align="center" />';
            })
            ->editColumn('machine_user_id', function ($data) {
                $joining_date = $data->professionaldata->joining_date;
                $carbonDate = Carbon::parse($joining_date);
                $formattedDate = $carbonDate->format("my");

                return 'LL-' . $formattedDate . '-' . $data->machine_user_id . '<br>' .'<strong style="color: #aa00ff">' . $data->professionaldata->working->name . '</strong>';

            })
//            ->editColumn('machine_user_id', '<strong>{{$machine_user_id}}</strong>'. '<br>' .'<strong>{{$machine_user_id}}</strong>')
            ->editColumn('name', '<strong>{{$name}}</strong>')
            ->editColumn('mobile', '<strong>{{$mobile}}</strong>')
            ->editColumn('desi_depart', function ($data) {
                return $data->professionaldata->department->name . '<br>' . '<strong style="color: #ff0000">' . $data->professionaldata->designation->name . '</strong>';
            })
            ->editColumn('joining_date', function ($data) {
                return $data->professionaldata->joining_date ;
            })
//            ->editColumn('updated_at', function ($data) {
//                $module_name = $this->module_name;
//
//                $diff = Carbon::now()->diffInHours($data->updated_at);
//
//                if ($diff < 25) {
//                    return $data->updated_at->diffForHumans();
//                } else {
//                    return $data->updated_at->isoFormat('llll');
//                }
//            })
            ->rawColumns(['avatar','joining_date','machine_user_id','name','desi_depart','mobile','action'])
//            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }


    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        $companies = Company::select('id','name')->get();
//        $users = User::whereNotIn('id',[auth()->user()->id])->select('id','name')->get();
        $users = User::select('id','name')->get();
        $titles = Title::select('id','name')->get();
        $religions = Religion::select('id','name')->get();
        $bangladesh = Bangladesh::select('district')->groupBy('district')
            ->get();

        $manage_department = ManageDepartment::select('id','name')->get();
        $section = Section::select('id','name')->get();
        $manage_designation = ManageDesignation::select('id','name')->get();
        $working_status = WorkingStatus::select('id','name')->get();
        $banks = Bank::select('id','name')->get();



        logUserAccess($module_title.' '.$module_action);

        return view(
            "$module_path.$module_name.create",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', 'module_action','companies','users','titles','religions','manage_designation','manage_department','section','working_status','banks','bangladesh')
        );
    }

    public function store(Request $request)
    {

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        if(!empty($request->avatar)) {
            $avatar = fileUpload($request['avatar'], ProfileImage());
        }else{
            flash(icon()."Image required")->error()->important();
        }
        if(!empty($request->signature)) {
            $signature = fileUpload($request['signature'], ProfileImage());
        }else{
            flash(icon()."Image required")->error()->important();
        }

            $user = User::create([
                'name' => $request->first_name . ' ' . $request->first_name,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'mobile'=>$request->mobile,
                'machine_user_id'=>$request->machine_user_id,
                'gender'=>$request->gender,
                'date_of_birth'=>$request->date_of_birth,
                'password' => Hash::make('12345678'),
                'avatar'=>$avatar,
                'last_login'=>Carbon::now(),
                'created_by'=>auth()->user()->id,
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        $userprofile = Userprofile::create([
            'user_id'=>$user->id,
            'name' => $request->first_name . ' ' . $request->first_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile'=>$request->mobile,
            'machine_user_id'=>$request->machine_user_id,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth,
            'password' => Hash::make('12345678'),
            'avatar'=>$avatar,
            'last_login'=>Carbon::now(),
            'created_by'=>auth()->user()->id,
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // Sync Roles
        if (isset($roles)) {
            $user->syncRoles($roles);
        } else {
            $roles = [];
            $user->syncRoles($roles);
        }

        // Sync Permissions
        if (isset($permissions)) {
            $user->syncPermissions($permissions);
        } else {
            $permissions = [];
            $user->syncPermissions($permissions);
        }

        if($user){
            $pd = ManageEmployee::create([
                'company_id'=>$request->company_id,
                'user_id'=>$user->id,
                'title_id'=>$request->title_id,
                'religion_id'=>$request->religion_id,
                'signature'=>$signature,
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
                'created_by'=>auth()->user()->id,
            ]);
            if($pd){
                ProfessionalEmployee::updateOrInsert([
                    'emp_personals_id'=>$pd->id,
                    'user_id'=>$user->id,
                    'department_id'=>$request->department_id,
                    'section_id'=>$request->section_id,
                    'designation_id'=>$request->designation_id,
                    'working_status_id'=>$request->working_status_id,
                    'bank_id'=>$request->bank_id,
                    'pf_no'=>$request->pf_no,
                    'report_to'=>$request->report_to,
                    'joining_date'=>$request->joining_date,
//                    'card_no'=>$request->card_no,
//                    'card_printed'=>$request->card_printed,
                    'overtime'=>$request->overtime,
                    'overtime_note'=>$request->overtime_note,
                    'transport'=>$request->transport,
                    'transport_note'=>$request->transport_note,
                    'pay_grade'=>$request->pay_grade,
                    'confirm_probation'=>$request->confirm_probation,
                    'confirm_period'=>$request->confirm_period,
                    'bank_acc_no'=>$request->bank_acc_no,
                    'status_change_date'=>$request->status_change_date,
                    'created_by'=>auth()->user()->id,
                ]);
            }
        }

        flash(icon()."New '".Str::singular($module_title)."' Added")->success()->important();

//        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
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
        $bangladesh = Bangladesh::select('district')->groupBy('district')
            ->get();

        $manage_department = ManageDepartment::select('id','name')->get();
        $section = Section::select('id','name')->get();
        $manage_designation = ManageDesignation::select('id','name')->get();
        $working_status = WorkingStatus::select('id','name')->get();
        $banks = Bank::select('id','name')->get();

        $single_data = User::with('personaldata','professionaldata')->where('id',$id)->first();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return view(
            "$module_path.$module_name.edit",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular',
                "$module_name_singular",'companies','users','titles','religions','manage_designation','manage_department','section','working_status','banks','single_data','bangladesh')
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

        $user = User::where('id',$id)->first();

        if(!empty($request->avatar)) {
            $avatar = fileUpload($request['avatar'], ProfileImage());
        }else{
            $avatar = $user->avatar;
        }

        $user = User::updateOrInsert([
            'id'=>$request->user_id,
        ],[
            'name' => $request->first_name . ' ' . $request->first_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile'=>$request->mobile,
            'machine_user_id'=>$request->machine_user_id,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth,
            'avatar'=>$avatar,
            'last_login'=>Carbon::now(),
            'created_by'=>auth()->user()->id,
            'email_verified_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
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
                        'user_id'=>$request->user_id,
                    ],
                    [
                        'user_id'=>$request->user_id,
                        'department_id'=>$request->department_id,
                        'section_id'=>$request->section_id,
                        'designation_id'=>$request->designation_id,
                        'working_status_id'=>$request->working_status_id,
                        'bank_id'=>$request->bank_id,
                        'pf_no'=>$request->pf_no,
                        'report_to'=>$request->report_to,
                        'joining_date'=>$request->joining_date,
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
        flash(icon().' '.Str::singular($module_title)."' Updated Successfully")->success()->important();
        return redirect()->route('backend.'.$this->module_name.'.index');

//        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

//        return redirect()->route("backend.$module_name.show", $$module_name_singular->id);
    }


}
