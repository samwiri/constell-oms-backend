<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsolidationBatche extends Model
{
    use HasFactory;

    protected $fillable = [
        'mawb_number', 'transport_mode', 'container_flight_number',
        'departure_date', 'status', 'package_count', 'total_weight',
        'created_by', 'finalized_at', 'departed_at', 'arrived_at'
    ];

    protected $casts = [
        'departure_date' => 'date',
        'finalized_at' => 'datetime',
        'departed_at' => 'datetime',
        'arrived_at' => 'datetime',
    ];

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'batch_packages','batch_id', 'package_id')->withTimestamps();
    }

    public function creator()
    {
        return $this->belongsTo(Staff::class, 'created_by');
    }

    public function manifest()
    {
        return $this->hasOne(Manifest::class, 'batch_id');
    }
}
