<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class BatchPackage extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    protected $fillable = [
        'batch_id',
        'package_id',
    ];


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

   


}
