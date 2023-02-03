<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 * @property integer $division_code
 * @property integer $total
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $tanggal_rapat
 */
class Expense extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.expenses';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'personnel_area_id', 'personnel_sub_area_id', 'division_code', 'total', 'created_at', 'updated_at', 'deleted_at', 'tanggal_rapat'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';
}
