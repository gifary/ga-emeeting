<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $request_id
 * @property string $file_name
 * @property string $created_at
 * @property string $updated_at
 */
class MeetingAttende extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.meeting_attendees';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['request_id', 'file_name', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';
}
