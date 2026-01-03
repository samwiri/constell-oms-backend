<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserWareHouse extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','warehouse_location_id'];

    function warehouse() : BelongsTo {

        return $this->belongsTo(WarehouseLocation::class,'warehouse_location_id');
        
    }

    function user() : BelongsTo {

        return $this->belongsTo(User::class,'user_id');
        
    }

    
}
