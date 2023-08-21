<?php

namespace Modules\EmployeePosting\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class EmployeePostingsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'EmployeePostings';

        // module name
        $this->module_name = 'employeepostings';

        // directory path of the module
        $this->module_path = 'employeeposting::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\EmployeePosting\Models\EmployeePosting";
    }

}
