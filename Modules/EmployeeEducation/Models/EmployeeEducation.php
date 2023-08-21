<?php

namespace Modules\EmployeeEducation\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeEducation extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'employeeeducations';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\EmployeeEducation\database\factories\EmployeeEducationFactory::new();
    }
}
