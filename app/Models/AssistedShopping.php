<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class AssistedShopping extends Model
{
use HasFactory, SoftDeletes, LogsActivity;

    protected $fillable = [
        'name',
        'url',
        'quantity',
        'status',
        'notes',
        'user_id'
    ];

    function user() : BelongsTo {

        return $this->belongsTo(User::class);
        
    }

    function quoteItems() : HasMany {

        return $this->hasMany(AssistedShoppingQuote::class);
        
    }

    function payments() : HasMany {

        return $this->hasMany(Payment::class,'assisted_shopping_id');
        
    }

    


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

}
