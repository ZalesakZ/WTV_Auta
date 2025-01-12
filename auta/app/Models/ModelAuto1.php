<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Eloquent umožňuje pracovat s databází pomocí PHP objektů, místo abys se psaly přímo SQL dotazy
class ModelAuto1 extends Model //model ModelAuto1 dědí z třídy Model, což je základní třída Eloquentu pro práci s databází
{
    protected $table = "auta"; //určuje, že tento model je propojen s tabulkou auta
    // modifikátor přístupu protected zajišťuje bezpečnost a zároveň přístup k hodnotám v rámci dědičnosti

    protected $fillable = ["fixni_ID"];
    // protected $fillable definuje, které sloupce tabulky lze hromadně plnit pomocí metod jako create() nebo update()
    // sloupce v poli $fillable odpovídají sloupcům databázové tabulky


    //modely umožňují definovat vztahy mezi tabulkami pomocí metod, které vracejí instance vztahových metod, např. belongsTo nebo hasMany
    //ve funkci typ je belongsTo
    public function typ()
    {
        return $this->belongsTo(ModelTypy::class, 'id');
        /*
        Tento vztah říká, že každý záznam z tabulky auta patří k jednomu záznamu v tabulce reprezentované modelem ModelTypy
        Metoda belongsTo obsahuje 3 parametry:
            ModelTypy::class → Model cílové tabulky
            'typ' → Sloupec v tabulce auta, který ukládá ID cílového záznamu
            'id' → Sloupec v tabulce typy, podle kterého se hledá odpovídající záznam
        */
    }
    //funkce ratings využívá funkci hasMany
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
        /*
        Tento vztah říká, že každý záznam v tabulce auta může mít více záznamů v tabulce reprezentované modelem Rating
        Metoda hasMany obsahuje jedniný parametr:
            'App\Models\Rating' → Model cílové tabulky ratings
        */
    }
}
