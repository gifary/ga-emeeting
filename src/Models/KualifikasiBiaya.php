<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KualifikasiBiaya extends Model
{
    use SoftDeletes;

    protected $connection = 'pgsql';

    protected $table = 'kualifikasi_biaya';

    public function history() {
        return $this->hasMany(HistoryKualifikasiBiaya::class, 'kualifikasi_biaya_id');
    }
}
