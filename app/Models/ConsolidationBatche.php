<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class ConsolidationBatche extends Model
{
    use HasFactory,SoftDeletes, LogsActivity;

    protected $fillable = [
        'mawb_number', 'transport_mode', 'container_flight_number',
        'departure_date', 'status', 'package_count', 'total_weight',
        'created_by', 'finalized_at', 'departed_at', 'arrived_at',
        'origin_country','destination_country','warehouse_location_id'
    ];

    protected $casts = [
        'departure_date' => 'datetime',
        'finalized_at' => 'datetime',
        'departed_at' => 'datetime',
        'arrived_at' => 'datetime',
    ];

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'batch_packages','batch_id', 'package_id')->withTimestamps();
    }  

    public function manifest()
    {
        return $this->hasOne(Manifest::class, 'batch_id');
    }

    function user() : BelongsTo {

        return $this->belongsTo(User::class,'created_by');
        
    }

     function warehouse() : BelongsTo {

        return $this->belongsTo(WarehouseLocation::class,'warehouse_location_id');
        
    }

    public static function batchNumber($transport_mode, $origin_country, $warehouse_location_id)
    {
        $warehouse_location = WarehouseLocation::findOrFail($warehouse_location_id);

        $batchCount = ConsolidationBatche::withTrashed()->count() + 1;

        $batchNumber = str_pad($batchCount, 4, '0', STR_PAD_LEFT);

        return $transport_mode
            . '-' . $origin_country
            . '-' . $warehouse_location->code
            . '-' . $batchNumber;
    }

     public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }
}
