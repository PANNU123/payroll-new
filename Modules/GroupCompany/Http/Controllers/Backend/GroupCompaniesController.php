<?php

namespace Modules\GroupCompany\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class GroupCompaniesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'GroupCompanies';

        // module name
        $this->module_name = 'groupcompanies';

        // directory path of the module
        $this->module_path = 'groupcompany::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\GroupCompany\Models\GroupCompany";
    }

}
