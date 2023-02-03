<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $request_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $description
 * @property integer $stars
 * @property string $created_at
 * @property string $updated_at
 * @property string $notulen
 * @property User $createdBy
 * @property Request $request
 * @property User $updatedBy
 */
class ServiceAppraisal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.service_appraisal';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['request_id', 'created_by', 'updated_by', 'description', 'stars', 'created_at', 'updated_at', 'notulen'];

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
