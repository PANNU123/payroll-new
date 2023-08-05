<?php

namespace Modules\Religion\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ReligionsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Religions';

        // module name
        $this->module_name = 'religions';

        // directory path of the module
        $this->module_path = 'religion::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Religion\Models\Religion";
    }

}
