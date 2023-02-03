<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $code
 * @property string $vendor_type
 * @property integer $unit_id
 * @property string $description
 * @property string $address1
 * @property string $address2
 * @property boolean $is_deleted
 * @property string $created_at
 * @property string $updated_at
 * @property string $email
 * @property string $phone
 * @property string $bank_code
 * @property string $account_number
 * @property string $account_holder
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 * @property User $createdBy
 * @property User $updatedBy
 * @property PackageConsumption[] packageConsumptions
 */
class VendorConsumption extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.vendor_consumption';

    /**
     * @var array
     */
    protected $fillable = ['created_by', 'updated_by', 'code', 'vendor_type', 'unit_id', 'description', 'address1', 'address2', 'is_deleted', 'created_at', 'updated_at', 'email', 'phone', 'bank_code', 'account_number', 'account_holder', 'personnel_area_id', 'personnel_sub_area_id'];

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
    public function updatedBy()
    {
        return $this->belongsTo('App\Models\Emeeting\User', 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packageConsumptions()
    {
        return $this->hasMany('App\Models\Emeeting\PackageConsumption', 'vendor_consumption_id');
    }
}
