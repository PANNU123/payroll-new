<?php

namespace Modules\ManageReference\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManageReference extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'managereferences';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ManageReference\database\factories\ManageReferenceFactory::new();
    }
}
