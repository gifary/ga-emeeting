<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $pengajuan_nac_id
 * @property string $filename
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property PengajuanNAC[] $pengajuans
 */
class PengajuanNACFile extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pengajuan_nac_file';

    /**
     * @var array
     */
     protected $guarded = ['id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function pengajuans()
    {
        return $this->belongsTo(PengajuanNAC::class, 'pengajuan_nac_id');
    }
}
