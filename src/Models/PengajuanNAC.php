<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $jenis_uraian_biaya_id
 * @property integer $kualifikasi_biaya_id
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 * @property integer $user_id
 * @property integer $approver_id
 * @property string $deskripsi_kebutuhan
 * @property string $tanggal_kebutuhan
 * @property integer $jumlah_pegawai
 * @property integer $vp
 * @property integer $status
 * @property integer $status_by
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property JenisUraianBiaya[] $jenisUraianBiayas
 * @property KualifikasiBiaya[] $kualifikasiBiayas
 * @property PersonnelArea[] $personnelAreas
 * @property PersonnelSubArea[] $personnelSubAreas
 * @property User[] $users
 * @property User[] $approvers
 * @property User[] $vps
 * @property PengajuanNACFile[] $pengajuanFiles
 */
class PengajuanNAC extends Model
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
    protected $fillable = ['jenis_uraian_biaya_id', 'kualifikasi_biaya_id', 'personnel_area_id', 'personnel_sub_area_id', 'user_id', 'approver_id', 'deskripsi_kebutuhan', 'tanggal_kebutuhan', 'jumlah_pegawai', 'vp', 'status', 'status_by', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function jenisUraianBiayas()
    {
        return $this->belongsTo(JenisUraianBiaya::class, 'jenis_uraian_biaya_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function kualifikasiBiayas()
    {
        return $this->belongsTo(KualifikasiBiaya::class, 'kualifikasi_biaya_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function PersonnelAreas()
    {
        return $this->belongsTo(PersonnelArea::class, 'personnel_area_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function personnelSubAreas()
    {
        return $this->belongsTo(PersonnelSubArea::class, 'personnel_sub_area_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function approvers()
    {
        return $this->belongsTo(User::class, 'approver_id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function vps()
    {
        return $this->belongsTo(User::class, 'vp');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pengajuanFiles()
    {
        return $this->hasMany(PengajuanNACFile::class, 'pengajuan_nac_id');
    }
}
