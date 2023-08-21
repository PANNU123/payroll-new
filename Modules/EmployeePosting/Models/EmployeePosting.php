<?php

namespace Modules\EmployeePosting\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeePosting extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'employeepostings';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\EmployeePosting\database\factories\EmployeePostingFactory::new();
    }
}
