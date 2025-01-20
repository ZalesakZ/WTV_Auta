<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelVsechnyAuta extends Model
{
    protected $table = "vsechny_auta";
    protected $fillable = ["fixni_ID", "jmeno", "barva", "typ", "pocet_vyher", "zavodni_cislo", "model_auta", "dabing_EN", "dabing_CZ", "auta1", "auta2", "auta3", "serialy", "hry", "info_o_autu"];

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'product_id', 'fixni_ID'); 
    }

    public function getAverageRatingAttribute()
    {
        return $this->ratings()->avg('rating') ?? 0; 
    }
}
