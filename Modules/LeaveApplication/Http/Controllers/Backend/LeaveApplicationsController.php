<?php

namespace Modules\LeaveApplication\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\User;
use Illuminate\Support\Str;
use Modules\Company\Models\Company;
use Modules\LeaveCategory\Models\LeaveCategory;

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

}
