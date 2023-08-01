<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoryKualifikasiBiaya extends Model
{
    use SoftDeletes;

    protected $connection = 'pgsql';

    protected $table = 'history_kualifikasi_biaya';
}
