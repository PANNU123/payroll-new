<?php

namespace Modules\WorkingStatus\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkingStatus extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'workingstatuses';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\WorkingStatus\database\factories\WorkingStatusFactory::new();
    }
}
