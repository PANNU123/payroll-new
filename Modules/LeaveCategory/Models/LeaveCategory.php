<?php

namespace Modules\LeaveCategory\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveCategory extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'leavecategories';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\LeaveCategory\database\factories\LeaveCategoryFactory::new();
    }
}
