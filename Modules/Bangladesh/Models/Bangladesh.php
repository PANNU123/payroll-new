<?php

namespace Modules\Bangladesh\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bangladesh extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'bangladeshes';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Bangladesh\database\factories\BangladeshFactory::new();
    }
}
