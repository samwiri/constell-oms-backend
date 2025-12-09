<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class DeliveryOrder extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $fillable = [
        'delivery_number',
        'order_id',
        'rider_id',
        'delivery_address',
        'delivery_date',
        'status',
        'pod_signature',
        'pod_photo_path',
        'delivery_notes',
        'delivered_at',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($delivery) {
            $last = DeliveryOrder::withTrashed()->orderBy('id', 'DESC')->first();
            $nextNumber = $last ? $last->id + 1 : 1;
            $delivery->delivery_number = 'DEL-' . str_pad($nextNumber, 6, '0', STR_PAD_LEFT);
        });
    }


    public function order()
    {
      return $this->belongsTo(Order::class);
    }

    public function rider()
    {
      return $this->belongsTo(User::class, 'rider_id');
    }

      public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
