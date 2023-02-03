<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $personnel_area_id
 * @property string $code
 * @property string $uuid
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property UserInternal[] $userInternals
 * @property PersonnelArea $personnelArea
 */
class PersonnelSubArea extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'personnel_sub_area';

    /**
     * @var array
     */
    protected $fillable = ['personnel_area_id', 'code', 'uuid', 'description', 'created_at', 'updated_at'];

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
        return $this->hasMany('App\Models\Emeeting\UserInternal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnelArea()
    {
        return $this->belongsTo('App\Models\Emeeting\PersonnelArea');
    }
}
