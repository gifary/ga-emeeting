<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisUraianBiaya extends Model
{
    use SoftDeletes;

    protected $connection = 'pgsql';

    protected $table = 'jenis_uraian_biaya';

    public function kualifikasiBiaya() {
        return $this->hasMany(KualifikasiBiaya::class, 'jenis_uraian_biaya_id');
    }
}
