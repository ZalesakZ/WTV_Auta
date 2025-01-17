<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelAuto3 extends Model
{
    protected $table = "auta3";
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
