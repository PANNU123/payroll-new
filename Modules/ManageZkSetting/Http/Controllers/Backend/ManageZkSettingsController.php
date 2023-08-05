<?php

namespace Modules\ManageZkSetting\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ManageZkSettingsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ManageZkSettings';

        // module name
        $this->module_name = 'managezksettings';

        // directory path of the module
        $this->module_path = 'managezksetting::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ManageZkSetting\Models\ManageZkSetting";
    }

}
