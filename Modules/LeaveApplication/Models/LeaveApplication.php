<?php

namespace Modules\LeaveApplication\Models;

use App\Models\BaseModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\LeaveCategory\Models\LeaveCategory;

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

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function leavecategory()
    {
        return $this->belongsTo(LeaveCategory::class,'leave_id');
    }
}
