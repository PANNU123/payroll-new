<?php

namespace Modules\ManageDesignation\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManageDesignation extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'managedesignations';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ManageDesignation\database\factories\ManageDesignationFactory::new();
    }
}
