<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelAuto1 extends Model
{
    protected $table = "auta";
    protected $fillable = ["fixni_ID"];

    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
