<?php

namespace Modules\ManageShift\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ManageShiftsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ManageShifts';

        // module name
        $this->module_name = 'manageshifts';

        // directory path of the module
        $this->module_path = 'manageshift::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ManageShift\Models\ManageShift";
    }

}
