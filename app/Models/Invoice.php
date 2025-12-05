<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number', 'user_id', 'order_id', 'type',
        'subtotal', 'tax', 'total', 'status', 'due_date', 'paid_at'
    ];
    protected $casts = [
        'due_date' => 'date',
        'paid_at' => 'datetime',
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

}
