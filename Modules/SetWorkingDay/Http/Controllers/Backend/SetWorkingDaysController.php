<?php

namespace Modules\SetWorkingDay\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class SetWorkingDaysController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'SetWorkingDays';

        // module name
        $this->module_name = 'setworkingdays';

        // directory path of the module
        $this->module_path = 'setworkingday::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\SetWorkingDay\Models\SetWorkingDay";
    }

}
