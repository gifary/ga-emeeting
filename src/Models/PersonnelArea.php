<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $unit_id
 * @property string $code
 * @property string $uuid
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property Unit $unit
 * @property UserInternal[] $userInternals
 * @property PersonnelSubArea[] $personnelSubAreas
 */
class PersonnelArea extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'personnel_area';

    /**
     * @var array
     */
    protected $fillable = ['unit_id', 'code', 'uuid', 'description', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userInternals()
    {
        return $this->hasMany(UserInternal::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnelSubAreas()
    {
        return $this->hasMany(PersonnelSubArea::class);
    }
}
