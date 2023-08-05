<?php

namespace Modules\ManageDepartment\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ManageDepartmentsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ManageDepartments';

        // module name
        $this->module_name = 'managedepartments';

        // directory path of the module
        $this->module_path = 'managedepartment::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ManageDepartment\Models\ManageDepartment";
    }

}
