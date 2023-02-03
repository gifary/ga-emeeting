<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $request_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $package_consumption_id
 * @property integer $package_price
 * @property string $created_at
 * @property string $updated_at
 * @property User $updatedBy
 * @property Request $request
 * @property User $createdBy
 */
class RequestConsumption extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.request_consumption';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['request_id', 'created_by', 'updated_by', 'package_consumption_id', 'package_price', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo('App\Models\Emeeting\User', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function request()
    {
        return $this->belongsTo('App\Models\Emeeting\Request', 'request_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updatedBy()
    {
        return $this->belongsTo('App\Models\Emeeting\User', 'updated_by');
    }
}
