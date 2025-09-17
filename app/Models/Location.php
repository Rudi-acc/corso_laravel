<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{

    // protected $table ="locations";
    // protected $fillable = ['name', 'description', 'latitude', 'longitude'];
    protected $guarded = [];
    public function baskets(): HasMany
    {
        return $this->hasMany(Basket::class);
    }

}


