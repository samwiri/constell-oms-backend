<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Order extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $fillable = [
        'tracking_number',
        'user_id',
        'origin_country',
        'receiver_name',
        'receiver_phone',
        'receiver_email',
        'receiver_address',
        'status',
        'received_at',
        'dispatched_at',
        'arrived_at',
        'released_at',
        'delivered_at',
    ];

    protected $casts = [
        'received_at'   => 'datetime',
        'dispatched_at' => 'datetime',
        'arrived_at'    => 'datetime',
        'released_at'   => 'datetime',
        'delivered_at'  => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function packages()
    {
        return $this->hasMany(Package::class);
    }
    public function statusHistory()
    {
        return $this->hasMany(OrderStatusHistory::class)->orderBy('created_at', 'desc');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function customsClearance()
    {
        return $this->hasOne(CustomsClearance::class);
    }

    public function deliveryOrder()
    {
        return $this->hasOne(DeliveryOrder::class);
    }   
     
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    protected function generateOrderNumber(): string
    {
        $date = now()->format('Ymd');
        $sequence = Order::withTrashed()->whereDate('created_at', today())->count() + 1;
        return sprintf('ORD-%s-%05d', $date, $sequence);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
