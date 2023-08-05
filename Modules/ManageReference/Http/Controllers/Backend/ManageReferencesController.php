<?php

namespace Modules\ManageReference\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ManageReferencesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ManageReferences';

        // module name
        $this->module_name = 'managereferences';

        // directory path of the module
        $this->module_path = 'managereference::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ManageReference\Models\ManageReference";
    }

}
