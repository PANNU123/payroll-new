<?php

namespace Modules\LeaveApplication\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveApplication extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'leaveapplications';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\LeaveApplication\database\factories\LeaveApplicationFactory::new();
    }
}
