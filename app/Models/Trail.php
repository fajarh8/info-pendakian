<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
    /** @use HasFactory<\Database\Factories\TrailFactory> */
    use HasFactory;

    public function mountain()
    {
        return $this->belongsTo(Mountain::class);
    }

    public function spot()
    {
        return $this->belongsToMany(Spot::class, 'trail_spot');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
