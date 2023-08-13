<?php

namespace Modules\LeaveRegister\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveRegister extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'leaveregisters';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\LeaveRegister\database\factories\LeaveRegisterFactory::new();
    }
}
