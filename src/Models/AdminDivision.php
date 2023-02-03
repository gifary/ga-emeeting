<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $admin_id
 * @property integer $unit_id
 * @property string $division_code
 * @property string $cost_center
 * @property string $created_at
 * @property string $updated_at
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 */
class AdminDivision extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['admin_id', 'unit_id', 'division_code', 'cost_center', 'created_at', 'updated_at', 'personnel_area_id', 'personnel_sub_area_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';
}
