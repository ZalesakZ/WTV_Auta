<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelVsechnyAuta extends Model
{
    protected $table = "vsechny_auta";
    protected $fillable = ["ID_obrazku", "jmeno", "barva", "typ", "zavodnik", "pocet_poharu", "historie", "auta1", "auta2", "auta3", "serialy", "hry"];

    public function typ()
    {
        return $this->belongsTo(ModelTypy::class, 'typ', 'id');
    }
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
