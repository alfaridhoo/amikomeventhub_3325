<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

/**
 * App\Models\Transaction
 *
 * @property int $id
 * @property int $event_id
 * @property string $order_id
 * @property string $customer_name
 * @property string $customer_email
 * @property string $customer_phone
 * @property int $quantity
 * @property int $total_price
 * @property string $status
 * @property string|null $snap_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Event $event
 */
class Transaction extends Model
{
    protected $fillable = [
        'event_id',
        'order_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'quantity',
        'total_price',
        'status',
        'snap_token',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
