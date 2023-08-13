<?php

namespace Modules\LeaveApplication\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

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

}
