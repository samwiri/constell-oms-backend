<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Invoice extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $fillable = [
        'invoice_number', 'user_id', 'order_id', 'type','status', 'due_date','currency'
    ];
    protected $casts = [
        'due_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function lineItems()
    {
        return $this->hasMany(InvoiceLineItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function getBalanceAttribute()
    {
        return $this->total - $this->payments()->sum('amount');
    }

    public function getIsOverdueAttribute()
    {
        return $this->status === 'UNPAID' && $this->due_date->isPast();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }


    protected function generateInvoiceNumber(): string
    {
        $date = now()->format('Ymd');
        $sequence = Invoice::withTrashed()->whereDate('created_at', today())->count() + 1;
        return sprintf('INV-%s-%05d', $date, $sequence);
    }

}
