<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $user_id
 * @property integer $business_area_id
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 * @property integer $floor_id
 * @property string $nip
 * @property string $employee_number
 * @property string $remember_token
 * @property string $hr_grade
 * @property string $hr_officer_employee_number
 * @property string $hr_pernr
 * @property string $hr_org_unit
 * @property string $hr_org1_code
 * @property string $created_at
 * @property string $updated_at
 * @property string $level
 * @property BusinessArea $businessArea
 * @property Floor $floor
 * @property PersonnelArea $personnelArea
 * @property PersonnelSubArea $personnelSubArea
 * @property User $user
 */
class UserInternal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_internal';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['business_area_id', 'personnel_area_id', 'personnel_sub_area_id', 'floor_id', 'nip', 'employee_number', 'remember_token', 'hr_grade', 'hr_officer_employee_number', 'hr_pernr', 'hr_org_unit', 'hr_org1_code', 'created_at', 'updated_at', 'level'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function businessArea()
    {
        return $this->belongsTo('App\Models\Emeeting\BusinessArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function floor()
    {
        return $this->belongsTo('App\Models\Emeeting\Floor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnelArea()
    {
        return $this->belongsTo('App\Models\Emeeting\PersonnelArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnelSubArea()
    {
        return $this->belongsTo('App\Models\Emeeting\PersonnelSubArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Emeeting\User');
    }
}
