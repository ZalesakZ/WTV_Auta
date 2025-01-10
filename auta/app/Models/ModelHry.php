<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelHry extends Model
{
    protected $table = "hry";
    protected $fillable = ["ID_obrazku", "jmeno", "barva", "typ", "zavodnik", "pocet_poharu", "historie", "auta1", "auta2", "auta3", "serialy", "hry"];

    public function typ()
    {
        return $this->belongsTo(ModelTypy::class, 'druh', 'id');
    }
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
