<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typ extends Model
{
    protected $table = "typy";

    public function auta()
    {
        return $this->hasMany(Auto::class, 'druh', 'id');
    }
}
