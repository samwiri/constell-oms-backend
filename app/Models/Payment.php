<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Payment extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $fillable = [
        'invoice_id',
        'assisted_shopping_id',
        'amount',
        'method',
        'transaction_reference',
        'gateway_reference',
        'status',
        'paid_at',
        'user_id'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class,'invoice_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function assisted_shopping()
    {
        return $this->belongsTo(AssistedShopping::class,'assisted_shopping_id');
    }

      public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
