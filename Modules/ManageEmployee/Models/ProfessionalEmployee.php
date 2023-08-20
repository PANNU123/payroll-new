<?php

namespace Modules\ManageEmployee\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\ManageDepartment\Models\ManageDepartment;
use Modules\ManageDesignation\Models\ManageDesignation;
use Modules\WorkingStatus\Models\WorkingStatus;

class ProfessionalEmployee extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'professionalemployees';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\ManageEmployee\database\factories\ManageEmployeeFactory::new();
    }

    public function designation(){
        return $this->belongsTo(ManageDesignation::class,'designation_id');
    }
    public function department(){
        return $this->belongsTo(ManageDepartment::class,'department_id');
    }

    public function working(){
        return $this->belongsTo(WorkingStatus::class,'working_status_id');
    }
}
