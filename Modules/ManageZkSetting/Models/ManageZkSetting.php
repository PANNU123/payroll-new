<?php

namespace Modules\ManageZkSetting\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManageZkSetting extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'managezksettings';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ManageZkSetting\database\factories\ManageZkSettingFactory::new();
    }
}
