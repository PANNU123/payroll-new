<?php

namespace Modules\ManageEmployee\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ManageEmployeesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ManageEmployees';

        // module name
        $this->module_name = 'manageemployees';

        // directory path of the module
        $this->module_path = 'manageemployee::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ManageEmployee\Models\ManageEmployee";
    }

}
