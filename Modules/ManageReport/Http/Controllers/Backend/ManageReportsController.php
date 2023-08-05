<?php

namespace Modules\ManageReport\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ManageReportsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ManageReports';

        // module name
        $this->module_name = 'managereports';

        // directory path of the module
        $this->module_path = 'managereport::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ManageReport\Models\ManageReport";
    }

}
