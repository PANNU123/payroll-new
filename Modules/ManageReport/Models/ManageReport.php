<?php

namespace Modules\ManageReport\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManageReport extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'managereports';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ManageReport\database\factories\ManageReportFactory::new();
    }
}
