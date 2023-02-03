<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $code
 * @property integer $unit_id
 * @property string $room_type
 * @property string $room_name
 * @property string $building_name
 * @property string $floor_name
 * @property integer $capacity
 * @property string $features
 * @property boolean $is_deleted
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 * @property string $room_behaviour
 * @property string $room_type_use
 * @property string $division_code
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 * @property Facility[] $facilities
 * @property Request[] $requests
 * @property RoomImage[] $roomImages
 */
class Room extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_manag.room';

    /**
     * @var array
     */
    protected $fillable = ['code', 'unit_id', 'room_type', 'room_name', 'building_name', 'floor_name', 'capacity', 'features', 'is_deleted', 'created_at', 'created_by', 'updated_at', 'updated_by', 'room_behaviour', 'room_type_use', 'division_code', 'personnel_area_id', 'personnel_sub_area_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function facilities()
    {
        return $this->belongsToMany('App\Models\Emeeting\Facility', 'event_manag.room_facilities', 'room_id', 'facility_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requests()
    {
        return $this->hasMany('App\Models\Emeeting\Request', 'room_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomImages()
    {
        return $this->hasMany('App\Models\Emeeting\RoomImage', 'room_id');
    }
}
