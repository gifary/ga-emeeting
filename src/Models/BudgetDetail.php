<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $budget_id
 * @property integer $month
 * @property integer $total
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class BudgetDetail extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.budget_details';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['budget_id', 'month', 'total', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';
}
