<?php

namespace Supala\Emeeting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $date
 * @property string $employee_name
 * @property string $employee_id
 * @property string $employee_email
 * @property string $employee_group
 * @property string $service_type
 * @property string $payment_method
 * @property string $merchant
 * @property string $pick_up
 * @property string $drop_off
 * @property string $booking_order
 * @property string $city
 * @property float $distance
 * @property string $order_status
 * @property string $order_source
 * @property string $order_code
 * @property string $order_description
 * @property string $order_date
 * @property string $order_complete
 * @property string $delivered_by
 * @property string $recipient_name
 * @property string $items
 * @property string $promo_code
 * @property string $payment_status
 * @property string $payment_detail
 * @property string $currency
 * @property integer $subtotal
 * @property integer $promo_amount
 * @property integer $parking_fee
 * @property integer $delivery_fee
 * @property integer $platform_fee
 * @property integer $small_order_fee
 * @property integer $other_fees
 * @property integer $total
 * @property integer $company_pays
 * @property integer $employee_pays
 * @property integer $personnel_area_id
 * @property integer $personnel_sub_area_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class ReportGrab extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'report_grab';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['date', 'employee_name', 'employee_id', 'employee_email', 'employee_group', 'service_type', 'payment_method', 'merchant', 'pick_up', 'drop_off', 'booking_order', 'city', 'distance', 'order_status', 'order_source', 'order_code', 'order_description', 'order_date', 'order_complete', 'delivered_by', 'recipient_name', 'items', 'promo_code', 'payment_status', 'payment_detail', 'currency', 'subtotal', 'promo_amount', 'parking_fee', 'delivery_fee', 'platform_fee', 'small_order_fee', 'other_fees', 'total', 'company_pays', 'employee_pays', 'personnel_area_id', 'personnel_sub_area_id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'pgsql';
}
