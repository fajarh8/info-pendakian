<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mountain extends Model
{
    /** @use HasFactory<\Database\Factories\MountainFactory> */
    use HasFactory;

    public function trails()
    {
        return $this->hasMany(Trail::class);
    }

    public function rental(){
        return $this->hasMany(Rental::class);
    }

    public function forum(){
        return $this->hasMany(Forum::class);
    }
}
