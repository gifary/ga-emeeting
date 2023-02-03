<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $request_id
 * @property string $grab_code
 * @property string $status
 * @property string $period
 * @property string $used_date
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 * @property float $total
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class DelegateGrab extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'delegate_grab';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['request_id', 'grab_code', 'status', 'period', 'used_date', 'personnel_area_id', 'personnel_sub_area_id', 'total', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function request()
    {
        return $this->belongsTo(Request::class, 'request_id');
    }
}
