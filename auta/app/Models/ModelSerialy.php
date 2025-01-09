<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelSerialy extends Model
{
    protected $table = "serialy";
    protected $fillable = ["jmeno", "barva", "typ", "zavodnik", "pocet_poharu", "historie", "auta1", "auta2", "auta3", "serialy", "hry"];

    public function typ()
    {
        return $this->belongsTo(ModelTypy::class, 'druh', 'id');
    }
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
