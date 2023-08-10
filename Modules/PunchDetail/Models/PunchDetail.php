<?php

namespace Modules\PunchDetail\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PunchDetail extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'punchdetails';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\PunchDetail\database\factories\PunchDetailFactory::new();
    }
}
