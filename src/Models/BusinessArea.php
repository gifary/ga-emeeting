<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $unit_id
 * @property string $company_code
 * @property string $business_area_code
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $address
 * @property UserInternal[] $userInternals
 * @property Unit $unit
 */
class BusinessArea extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'business_area';

    /**
     * @var array
     */
    protected $fillable = ['unit_id', 'company_code', 'business_area_code', 'description', 'created_at', 'updated_at', 'address'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userInternals()
    {
        return $this->hasMany(UserInternal::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
