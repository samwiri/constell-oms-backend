<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class WarehouseLocation extends Model
{
    use HasFactory, LogsActivity, SoftDeletes;

    protected $fillable = ['code','name','address','manager','active','rack_count','country'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    function racks() : HasMany {

        return $this->hasMany(WarehouseRack::class);
        
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'user_ware_houses',
            'warehouse_location_id',
            'user_id'
        )->using(UserWareHouse::class);
    }
}
