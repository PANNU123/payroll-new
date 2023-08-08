<?php

namespace Modules\Title\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Title extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'titles';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Title\database\factories\TitleFactory::new();
    }
}
