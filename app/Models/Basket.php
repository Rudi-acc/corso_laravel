<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Basket extends Model
{
        protected $guarded = [];
        
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

}
