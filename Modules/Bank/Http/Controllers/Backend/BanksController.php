<?php

namespace Modules\Bank\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\User;
use Illuminate\Support\Str;
use Modules\Company\Models\Company;
use Modules\ManageDepartment\Models\ManageDepartment;

class BanksController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Banks';

        // module name
        $this->module_name = 'banks';

        // directory path of the module
        $this->module_path = 'bank::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Bank\Models\Bank";
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

        $companies = Company::select('id','name')->get();
        $users = User::select('id','name')->get();

        return view(
            "$module_path.$module_name.create",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', 'module_action','companies','users')
        );
    }

    public function edit($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $$module_name_singular = $module_model::findOrFail($id);

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);
        $companies = Company::select('id','name')->get();
        $users = User::select('id','name')->get();

        return view(
            "$module_path.$module_name.edit",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular",'companies','users')
        );
    }


}