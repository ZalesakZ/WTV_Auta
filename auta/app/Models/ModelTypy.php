<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelTypy extends Model
{
    protected $table = "typy";

    public function auta()
    {
        return $this->hasMany(ModelAuto1::class, 'druh', 'id');
    }
}
