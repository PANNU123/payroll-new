<?php

namespace Modules\LeaveCategory\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class LeaveCategoriesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'LeaveCategories';

        // module name
        $this->module_name = 'leavecategories';

        // directory path of the module
        $this->module_path = 'leavecategory::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\LeaveCategory\Models\LeaveCategory";
    }

}
