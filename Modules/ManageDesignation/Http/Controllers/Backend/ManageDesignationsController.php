<?php

namespace Modules\ManageDesignation\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ManageDesignationsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ManageDesignations';

        // module name
        $this->module_name = 'managedesignations';

        // directory path of the module
        $this->module_path = 'managedesignation::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ManageDesignation\Models\ManageDesignation";
    }

}
