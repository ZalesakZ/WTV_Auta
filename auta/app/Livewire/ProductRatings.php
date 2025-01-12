<?php
/*
 * Tento PHP soubor je Livewire komponenta, která se používá pro správu hodnocení (ratingu) produktů
 * Je součástí systému, který umožňuje uživatelům hodnotit produkty a přidávat komentáře
 * Komponenta interaguje s databází, aby ukládala, načítala a mazala hodnocení
*/

namespace App\Livewire;

use Livewire\Component;
use App\Models\Rating;

class ProductRatings extends Component //dědí od třídy Component 
{
    //deklarace proměnných
    public $rating;
    public $comment;
    public $currentId;
    public $product;
    public $hideForm;

    // $rules: Určuje validační pravidla pro hodnocení a komentář; hodnocení musí být číslo mezi 1 a 5, a komentář je povinný
    protected $rules = [
        'rating' => ['required', 'in:1,2,3,4,5'],
        'comment' => 'required',

    ];

    /*
     * funkce render získává hodnocení a komentáře pro konkrétní produkt (podle $this->product->id) a zobrazuje je na stránce
     * používá model Rating k získání hodnocení, které mají stav status = 1 (což znamená, že jsou veřejně zobrazená) a vztahuje je na uživatele (with('user')),
     * aby se zobrazilo jméno uživatele, který komentář přidal
    */
    public function render()
    {
        $comments = Rating::where('product_id', $this->product->id)->where('status', 1)->with('user')->get();
        return view('livewire.product-ratings', compact('comments'));
    }

    /*
     * funkce mount se volá při inicializaci komponenty
     * pokud je uživatel přihlášen (auth()->user()), zjistí se, zda už tento uživatel již hodnotil auto ($this->product->id)
     * pokud ano, načtou se existující hodnoty hodnocení a komentáře a nastaví se do příslušných proměnných ($rating, $comment, $currentId)
    */
    public function mount()
    {
        if(auth()->user()){
            $rating = Rating::where('user_id', auth()->user()->id)->where('product_id', $this->product->id)->first();
            if (!empty($rating)) {
                $this->rating  = $rating->rating;
                $this->comment = $rating->comment;
                $this->currentId = $rating->id;
            }
        }
        return view('livewire.product-ratings');
    }

    // funkce slouží k odstranění hodnocení pokud uživatel, který chce smazat hodnocení, je jeho vlastníkem (nebo  ho che odstranit administrátor)
    public function delete($id)
    {
        $rating = Rating::where('id', $id)->first();
        if ($rating && ($rating->user_id == auth()->user()->id)) {
            $rating->delete();
        }
        //po odstranění hodnocení z DB se ještě proměnné resetují
        if ($this->currentId) {
            $this->currentId = '';
            $this->rating  = '';
            $this->comment = '';
        }
    }
    /*
     * funkce rate je volána při odeslání formuláře hodnocení
     * 
     * nejprve se ověří, zda uživatel již hodnotil produkt
     * pokud ano, aktualizuje existující hodnocení (pomocí metody update())
     * pokud ne, vytvoří nové hodnocení (pomocí metody save())
     * 
     * Po úspěšném uložení se zobrazí zpráva informující uživatele a formulář pro hodnocení může být skryt
    */
    public function rate()
    {
        $rating = Rating::where('user_id', auth()->user()->id)->where('product_id', $this->product->id)->first();
        $this->validate();
        if (!empty($rating)) {
            $rating->user_id = auth()->user()->id;
            $rating->product_id = $this->product->id;
            $rating->rating = $this->rating;
            $rating->comment = $this->comment;
            $rating->status = 1;
            try {
                $rating->update();
            } catch (\Throwable $th) { //odchycení chyb a výjimek
                throw $th;
            }
            session()->flash('message', 'Success!');
        } else {
            $rating = new Rating;
            $rating->user_id = auth()->user()->id;
            $rating->product_id = $this->product->id;
            $rating->rating = $this->rating;
            $rating->comment = $this->comment;
            $rating->status = 1;
            try {
                $rating->save();
            } catch (\Throwable $th) { //odchycení chyb a výjimek
                throw $th;
            }
            $this->hideForm = true;
        }
    }
}