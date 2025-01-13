<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Rating extends Model
{
    /**
     * Attributes to guard against mass-assignment.
     *
     * @var array
     */

    /*
     * $guarded je vlastnost, která určuje, které atributy modelu nejsou chráněny proti hromadnému přiřazení
     * V tomto případě je prázdný seznam, což znamená, že Laravel neomezuje žádné atributy pro hromadné přiřazení
     * Jinými slovy, jakýkoli atribut tohoto modelu může být přiřazen bez obav z bezpečnostních problémů
     * 
     * Tato konfigurace je pro aplikace, které nejsou citlivé na bezpečnostní problémy s hromadným přiřazením
     * V praxi se často používá $fillable (který je v tomto souboru také definován) místo $guarded, protože je bezpečnější definovat,
     * které atributy jsou povoleny pro hromadné přiřazení
    */
    protected $guarded = [];

    /*
     * $fillable určuje, které atributy mohou být přiřazeny hromadně (pomocí metody create() nebo update())
     * V tomto případě to znamená, že comment (komentář) je jediný atribut, který může být při hromadném přiřazení nastaven
     * To znamená, že při vytváření nebo aktualizaci hodnocení bude možné nastavit pouze hodnotu pro comment bez obav z neúmyslného přepsání jiných citlivých polí
    */
    protected $fillable = ['product_id', 'rating'];

    // tento model definuje dva vztahy s jinými modely

    /*
     * Tento vztah znamená, že každé hodnocení patří jednomu uživateli
     * Konkrétně belongsTo je funkce, která označuje mnoho k jednomu vztahu mezi tabulkami 
     * Pokud existuje cizí klíč user_id v tabulce ratings, tento vztah umožňuje získat uživatele, který toto hodnocení vytvořil
     * To znamená, že každé hodnocení je propojeno s konkrétním uživatelem
    */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /*
     * Tento vztah označuje, že každé hodnocení patří k produktu (autu)
     * V tomto případě model Product by mohl reprezentovat konkrétní objekt, který je hodnocen
    */


    public function product()
    {
        return $this->belongsTo(ModelVsechnyAuta::class, 'product_id'); // Správné mapování cizího klíče
    }

}
