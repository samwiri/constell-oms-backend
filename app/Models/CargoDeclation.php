<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class CargoDeclation extends Model
{

    use HasFactory, SoftDeletes, LogsActivity;

    protected $fillable = [
        'warehouse_location_id', 'internal_curier','tracking_number',
        'cargo_details','value','weight','status','files','user_id'
    ];

    protected $casts = [     
        'files' => 'array',     
    ];

    function user() : BelongsTo {

        return $this->belongsTo(User::class);
        
    }

    function location() : BelongsTo {

        return $this->belongsTo(WarehouseLocation::class,'warehouse_location_id');
        
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

}
