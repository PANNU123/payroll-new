<?php

namespace Modules\NoticeBoard\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class NoticeBoardsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'NoticeBoards';

        // module name
        $this->module_name = 'noticeboards';

        // directory path of the module
        $this->module_path = 'noticeboard::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\NoticeBoard\Models\NoticeBoard";
    }

}
