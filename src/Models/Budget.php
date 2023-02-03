<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 * @property integer $division_code
 * @property string $year
 * @property integer $total
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Budget extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.budgets';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['personnel_area_id', 'personnel_sub_area_id', 'division_code', 'year', 'total', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    public function details()
    {
        return $this->hasMany(BudgetDetail::class,'budget_Id');
    }
}
