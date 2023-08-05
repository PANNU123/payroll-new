<?php

namespace Modules\ManageDepartment\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManageDepartment extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'managedepartments';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ManageDepartment\database\factories\ManageDepartmentFactory::new();
    }
}
