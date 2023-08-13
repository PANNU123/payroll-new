<?php

namespace Modules\Bangladesh\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class BangladeshesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Bangladeshes';

        // module name
        $this->module_name = 'bangladeshes';

        // directory path of the module
        $this->module_path = 'bangladesh::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Bangladesh\Models\Bangladesh";
    }

}
