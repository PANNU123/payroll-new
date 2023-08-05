<?php

namespace Modules\TaskManagement\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class TaskManagementsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'TaskManagements';

        // module name
        $this->module_name = 'taskmanagements';

        // directory path of the module
        $this->module_path = 'taskmanagement::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\TaskManagement\Models\TaskManagement";
    }

}
