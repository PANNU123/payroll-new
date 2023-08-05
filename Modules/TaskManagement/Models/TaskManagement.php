<?php

namespace Modules\TaskManagement\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskManagement extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'taskmanagements';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\TaskManagement\database\factories\TaskManagementFactory::new();
    }
}
