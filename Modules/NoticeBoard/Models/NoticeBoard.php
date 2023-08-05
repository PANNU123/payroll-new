<?php

namespace Modules\NoticeBoard\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class NoticeBoard extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'noticeboards';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\NoticeBoard\database\factories\NoticeBoardFactory::new();
    }
}
