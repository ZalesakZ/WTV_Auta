<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelVsechnyAuta extends Model
{
    protected $table = "vsechny_auta";
    protected $fillable = ["fixni_ID", "jmeno", "barva", "typ", "zavodnik", "pocet_poharu", "info_o_autu", "auta1", "auta2", "auta3", "serialy", "hry"];

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'public_id'); // Ujistěte se, že 'product_id' odpovídá vašemu cizímu klíči
    }

    public function getAverageRatingAttribute()
    {
        return $this->ratings()->avg('rating') ?? 0; // Pokud není hodnocení, vrací 0
    }
}
