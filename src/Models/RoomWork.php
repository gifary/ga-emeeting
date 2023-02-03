<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nip
 * @property string $division_code
 * @property string $name
 * @property string $date_wfo
 * @property string $created_at
 * @property string $updated_at
 * @property string $bording_time
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 */
class RoomWork extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'room_work';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nip', 'division_code', 'name', 'date_wfo', 'created_at', 'updated_at', 'bording_time', 'personnel_area_id', 'personnel_sub_area_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';
}
