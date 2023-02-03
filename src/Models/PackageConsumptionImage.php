<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $package_consumption_id
 * @property string $image_filename
 * @property string $images_str
 * @property boolean $is_deleted
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 * @property PackageConsumption $packageConsumption
 */
class PackageConsumptionImage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.package_consumption_images';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['package_consumption_id', 'image_filename', 'images_str', 'is_deleted', 'created_at', 'created_by', 'updated_at', 'updated_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function packageConsumption()
    {
        return $this->belongsTo('App\Models\Emeeting\PackageConsumption', 'package_consumption_id');
    }
}
