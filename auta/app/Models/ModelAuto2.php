<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelAuto2 extends Model
{
    protected $table = "auta2";
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
