<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $code
 * @property string $uuid
 * @property string $company_code
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property integer $admin_id
 * @property PersonnelArea[] $personnelAreas
 * @property Floor[] $floors
 * @property BusinessArea[] $businessAreas
 */
class Unit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'unit';

    /**
     * @var array
     */
    protected $fillable = ['code', 'uuid', 'company_code', 'description', 'created_at', 'updated_at', 'admin_id'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnelAreas()
    {
        return $this->hasMany('App\Models\Emeeting\PersonnelArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function floors()
    {
        return $this->hasMany('App\Models\Emeeting\Floor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function businessAreas()
    {
        return $this->hasMany('App\Models\Emeeting\BusinessArea');
    }
}
