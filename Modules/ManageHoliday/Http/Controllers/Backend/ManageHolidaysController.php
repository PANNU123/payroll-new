<?php

namespace Modules\ManageHoliday\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ManageHolidaysController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ManageHolidays';

        // module name
        $this->module_name = 'manageholidays';

        // directory path of the module
        $this->module_path = 'manageholiday::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ManageHoliday\Models\ManageHoliday";
    }

}
