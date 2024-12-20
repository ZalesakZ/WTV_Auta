<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = "auto";
    protected $fillable = ["jmeno", "barva", "typ", "zavodnik", "pocet_poharu", "historie", "auta1", "auta2", "auta3", "serialy", "hry"];

    public function typ()
    {
        return $this->belongsTo(Typ::class, 'druh', 'id');
    }
}
