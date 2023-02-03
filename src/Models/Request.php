<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $room_id
 * @property integer $user_id
 * @property string $request_number
 * @property string $event_name
 * @property string $event_loc
 * @property string $external_type
 * @property boolean $is_consumption
 * @property string $date_from
 * @property string $date_to
 * @property integer $person_amount
 * @property string $room_name
 * @property string $notes
 * @property string $req_status
 * @property integer $cancel_user_id
 * @property string $cancel_reason
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 * @property integer $req_level
 * @property string $consumption_status
 * @property string $extension_number
 * @property integer $launch_box
 * @property integer $buffet
 * @property string $division
 * @property string $pers_area
 * @property string $approve_status
 * @property integer $approve_by
 * @property string $reject_reason
 * @property string $check_in
 * @property string $check_out
 * @property integer $room_work_id
 * @property string $meeting_type
 * @property string $nota_dinas
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 * @property string $type_consumption
 * @property RequestConsumption[] $requestConsumptions
 * @property Room $room
 * @property DelegateGrab[] $delegateGrabs
 * @property ServiceAppraisal[] $serviceAppraisals
 */
class Request extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.request';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['room_id', 'user_id', 'request_number', 'event_name', 'event_loc', 'external_type', 'is_consumption', 'date_from', 'date_to', 'person_amount', 'room_name', 'notes', 'req_status', 'cancel_user_id', 'cancel_reason', 'created_at', 'created_by', 'updated_at', 'updated_by', 'req_level', 'consumption_status', 'extension_number', 'launch_box', 'buffet', 'division', 'pers_area', 'approve_status', 'approve_by', 'reject_reason', 'check_in', 'check_out', 'room_work_id', 'meeting_type', 'nota_dinas', 'personnel_area_id', 'personnel_sub_area_id', 'type_consumption'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requestConsumptions()
    {
        return $this->hasMany('App\Models\Emeeting\EventManag.requestConsumption', 'request_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room()
    {
        return $this->belongsTo('App\Models\Emeeting\EventManag.room', 'room_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function delegateGrabs()
    {
        return $this->hasMany('App\Models\Emeeting\DelegateGrab', 'request_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function serviceAppraisals()
    {
        return $this->hasMany('App\Models\Emeeting\ServiceAppraisal', 'request_id');
    }
}
