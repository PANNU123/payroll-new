<?php

namespace Modules\Section\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sections';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Section\database\factories\SectionFactory::new();
    }
}
