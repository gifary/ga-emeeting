<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $hidden = ['password'];

    protected $connection = 'pgsql';
    protected $table = 'user';

    public function routeNotificationForFcm()
    {
        return $this->device_token;
    }

    public function internal()
    {
        return $this->belongsTo(UserInternal::class, 'id', 'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role', 'user_id', 'role_id');
    }

    public function scopeRole($query, $role)
    {
        return $query->whereHas('roles', function ($q2) use($role) {
            if (is_array($role)) {
                $q2->whereIn('description', $role);
            }else{
                $q2->whereIn('description', explode(',', $role));
            }
        });
    }
}
