<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $org_code
 * @property string $stext
 * @property string $ltext
 * @property string $company_code
 * @property string $business_area
 * @property string $personel_area
 * @property string $personel_sub_area
 * @property string $parent_org_code
 * @property string $created_at
 * @property string $updated_at
 */
class MOrgUnit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_org_unit';

    /**
     * @var array
     */
    protected $fillable = ['id', 'org_code', 'stext', 'ltext', 'company_code', 'business_area', 'personel_area', 'personel_sub_area', 'parent_org_code', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';
}
