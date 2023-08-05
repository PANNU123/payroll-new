<?php

namespace Modules\ManageEmployee\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManageEmployee extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'manageemployees';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ManageEmployee\database\factories\ManageEmployeeFactory::new();
    }
}
