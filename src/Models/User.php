<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    protected $connection = 'pgsql';
    protected $table = 'public.user';

    public function routeNotificationForFcm()
    {
        return $this->device_token;
    }

    public function internal()
    {
        return $this->hasOne(UserInternal::class, 'user_id');
    }
}
