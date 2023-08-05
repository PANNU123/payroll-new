<?php

namespace Modules\ManageHoliday\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManageHoliday extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'manageholidays';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ManageHoliday\database\factories\ManageHolidayFactory::new();
    }
}
