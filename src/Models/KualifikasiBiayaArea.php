<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KualifikasiBiayaArea extends Model
{
    use SoftDeletes;

    protected $connection = 'pgsql';

    protected $table = 'kualifikasi_biaya_area';

    public function kualifikasi_biaya()
    {
        return $this->belongsTo(KualifikasiBiaya::class,'kualifikasi_biaya_id', 'id');
    }

    public function area()
    {
        return $this->belongsTo(PersonnelArea::class,'personnel_area_id', 'id');
    }

    public function subarea()
    {
        return $this->belongsTo(PersonnelSubArea::class,'personnel_sub_area_id', 'id');
    }
}
