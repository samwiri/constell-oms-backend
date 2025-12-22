<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class WarehouseRack extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $fillable = [
        'zone_name',
        'bin_start',
        'bin_end',
        'capacity',
        'type',
        'warehouse_location_id'   
    ];

    function wareHouse() : BelongsTo {
        return $this->belongsTo(WarehouseLocation::class,'warehouse_location_id');
    }

    function packages() : HasMany {
        return $this->hasMany(Package::class,'warehouse_rack_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
