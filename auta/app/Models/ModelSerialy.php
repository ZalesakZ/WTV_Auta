<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelSerialy extends Model
{
    protected $table = "serialy";
    protected $fillable = ["fixni_ID"];

    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }

    public function getAverageRatingAttribute()
    {
        return $this->ratings()->avg('rating');
    }
}
