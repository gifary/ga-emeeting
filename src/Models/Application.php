<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $code
 * @property string $uuid
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property UserRole[] $userRoles
 */
class Application extends Model
{
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'application';

    /**
     * @var array
     */
    protected $fillable = ['code', 'uuid', 'description', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userRoles()
    {
        return $this->hasMany('App\Models\Emeeting\UserRole');
    }
}
