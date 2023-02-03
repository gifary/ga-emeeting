<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $unit_id
 * @property string $division_code
 * @property string $name
 * @property string $no_telphone
 * @property string $nip
 * @property string $email
 * @property string $password
 * @property string $token
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Tad extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tad';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['unit_id', 'division_code', 'name', 'no_telphone', 'nip', 'email', 'password', 'token', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';
}
