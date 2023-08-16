<?php

namespace Modules\LeaveApplication\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Modules\Company\Models\Company;
use Modules\LeaveApplication\Models\LeaveApplication;
use Modules\LeaveCategory\Models\LeaveCategory;
use Modules\LeaveRegister\Models\LeaveRegister;
use DateTime;
use Yajra\DataTables\DataTables;

class LeaveApplicationsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'LeaveApplications';

        // module name
        $this->module_name = 'leaveapplications';

        // directory path of the module
        $this->module_path = 'leaveapplication::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\LeaveApplication\Models\LeaveApplication";
    }

//    public function index() {
//        return LeaveApplication::with('user')->get();
//    }

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
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = label_case($module_title);
        $title = $page_heading.' '.label_case($module_action);

        $$module_name = $module_model::with('user','leavecategory')->latest();

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', function ($data) {
               return $data->user->name;
            })
            ->editColumn('leave_category', function ($data) {
                return $data->leavecategory->name;
            })
            ->editColumn('total_days', function ($data) {
                $fdate = $data->from_date;
                $tdate = $data->to_date;
                $datetime1 = new DateTime($fdate);
                $datetime2 = new DateTime($tdate);
                $interval = $datetime1->diff($datetime2);
                $requested_leaving_days = $interval->format('%a');
                return $requested_leaving_days.' days';
            })
            ->editColumn('reason', function ($data) {
                return $data->reason;
            })

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


    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        logUserAccess($module_title.' '.$module_action);
         $users = User::whereNotIn('id', [auth()->user()->id])->select('id','name')->get();
        $leave_categories = LeaveCategory::select('id','name')->get();
        return view(
            "$module_path.$module_name.create",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', 'module_action','users','leave_categories')
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

        $fdate = $request->from_date;
        $tdate = $request->to_date;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $requested_leaving_days = $interval->format('%a');

        $leave_register = LeaveRegister::where('user_id',auth()->user()->id)->where('leave_id',$request->leave_id)->first();

        if($leave_register->leave_eligible < $requested_leaving_days){
            flash(icon()."You do not have enough leave days")->error()->important();
            return redirect()->back();
        }

        $data_array = $request->all();
        $data_array['user_id'] = auth()->user()->id;
        $user = User::where('id',auth()->user()->id)->first();
        $data_array['company_id'] = $user->company_id;
        $data_array['leave_year'] = Carbon::now();

        if(!empty($request->leave_attachment)) {
            $data_array['leave_attachment'] = fileUpload($request['leave_attachment'], AtatchmentFile());
        }else {
            flash(icon() . "Image required")->error()->important();
        }

        $$module_name_singular = $module_model::create($data_array);

        flash(icon()."New '".Str::singular($module_title)."' Added")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }

}
