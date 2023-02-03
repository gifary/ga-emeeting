<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $code
 * @property string $stext
 * @property string $ltext
 * @property string $parent_org_code
 * @property boolean $is_active
 * @property integer $admin_id
 * @property string $no_cost_center
 * @property string $personnel_area_code
 * @property string $personnel_sub_area_code
 * @property boolean $show_in_dropdown
 */
class OrganizationUnit extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'organization_unit';

    /**
     * @var array
     */
    protected $fillable = ['code', 'stext', 'ltext', 'parent_org_code', 'is_active', 'admin_id', 'no_cost_center', 'personnel_area_code', 'personnel_sub_area_code', 'show_in_dropdown'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';
}
