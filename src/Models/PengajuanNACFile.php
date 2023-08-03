<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

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
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pengajuan_nac';

    /**
     * @var array
     */
    protected $fillable = ['pengajuan_nac_id', 'filename', 'created_at', 'updated_at', 'deleted_at'];

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
