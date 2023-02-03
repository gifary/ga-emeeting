<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $bank_name
 * @property string $bank_code
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class MBank extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_bank';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['bank_name', 'bank_code', 'created_at', 'updated_at', 'created_by', 'updated_by'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';
}
