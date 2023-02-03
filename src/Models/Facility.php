<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property boolean $is_deleted
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Facility extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.facility';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'is_deleted', 'created_by', 'updated_by', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

}
