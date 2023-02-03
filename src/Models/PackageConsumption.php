<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $vendor_consumption_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $package_name
 * @property string $package_description
 * @property float $price
 * @property boolean $is_deleted
 * @property string $created_at
 * @property string $updated_at
 * @property PackageConsumptionImage[] $packageConsumptionImages
 * @property User $updatedBy
 * @property User $createdBy
 * @property VendorConsumption $vendorConsumption
 */
class PackageConsumption extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.package_consumption';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['vendor_consumption_id', 'created_by', 'updated_by', 'package_name', 'package_description', 'price', 'is_deleted', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packageConsumptionImages()
    {
        return $this->hasMany(PackageConsumption::class, 'package_consumption_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendorConsumption()
    {
        return $this->belongsTo(VendorConsumption::class, 'vendor_consumption_id');
    }
}
