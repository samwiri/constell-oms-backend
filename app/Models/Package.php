<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    use HasFactory;

    protected $fillable = [
        'order_id', 'hwb_number', 'contents', 'declared_value',
        'weight', 'length', 'width', 'height',
        'is_fragile', 'is_hazardous', 'is_damaged', 'damage_photos',
        'location_id', 'received_at'
    ];

    protected $casts = [
        'is_fragile' => 'boolean',
        'is_hazardous' => 'boolean',
        'is_damaged' => 'boolean',
        'damage_photos' => 'array',
        'received_at' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function location()
    {
        return $this->belongsTo(WarehouseLocation::class, 'location_id');
    }

    public function batches()
    {
        return $this->belongsToMany(ConsolidationBatche::class,'batch_packages', 'package_id', 'batch_id')->withTimestamps();
    }

    public function storageFee()
    {
        return $this->hasOne(StorageFee::class);
    }

    public function getVolumetricWeightAttribute()
    {
        return ($this->length * $this->width * $this->height) / 5000;
    }

    public function getChargeableWeightAttribute()
    {
        return max($this->weight, $this->volumetric_weight);
    }
    
}
