<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class AssistedShoppingQuote extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    protected $fillable = ['item_name','quantity','unit_price','assisted_shopping_id','currency'];

    function assistedShoping() : BelongsTo {

        return $this->belongsTo(AssistedShopping::class);
        
    }


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    
}
