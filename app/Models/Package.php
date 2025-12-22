<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Package extends Model
{

    use HasFactory, SoftDeletes, LogsActivity;

    protected $fillable = [
        'order_id', 'hwb_number', 'contents', 'declared_value',
        'weight', 'length', 'width', 'height',
        'is_fragile', 'is_hazardous', 'is_damaged', 'package_photos',
        'warehouse_rack_id', 'received_at'
    ];

    protected $casts = [
        'is_fragile' => 'boolean',
        'is_hazardous' => 'boolean',
        'is_damaged' => 'boolean',
        'package_photos' => 'array',
        'received_at' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function rack()
    {
        return $this->belongsTo(WarehouseRack::class, 'warehouse_rack_id');
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
        return ($this->length * $this->width * $this->height);
    }

    public function getChargeableWeightAttribute()
    {
        return max($this->weight, $this->volumetric_weight);
    }


    public static function generateNumber(){

        $date = now()->format('Ymd');
        $sequence = Package::withTrashed()->whereDate('created_at', today())->count() + 1;
        return sprintf('HWB-%s-%05d', $date, $sequence);
       
    }

      public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
    
}
