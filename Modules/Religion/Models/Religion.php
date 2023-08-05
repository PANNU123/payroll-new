<?php

namespace Modules\Religion\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Religion extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'religions';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Religion\database\factories\ReligionFactory::new();
    }
}
