<?php

namespace Modules\ManageShift\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManageShift extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'manageshifts';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ManageShift\database\factories\ManageShiftFactory::new();
    }
}
