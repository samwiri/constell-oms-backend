<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class InvoiceLineItem extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $fillable = [
        'invoice_id',
        'description',
        'quantity',
        'unit_price',
    ];

     protected $casts = [
        'quantity' => 'double',
        'unit_price'=>'double'
    ];


    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function getTotalAttribute()
    {
        return $this->quantity * $this->unit_price;
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
