<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelHry extends Model
{
    protected $table = "hry";
    protected $fillable = ["fixni_ID"];

    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
