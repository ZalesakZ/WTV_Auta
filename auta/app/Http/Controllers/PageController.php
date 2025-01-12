<?php
/*
 * V souboru PageController.php jsou definovány funkce, které se používají k obsluze různých rout aplikace
 * Tento kontroler načítá data z různých modelů a předává je do Blade šablon, které zobrazují obsah uživatelskému rozhraní
*/

namespace App\Http\Controllers;

use App\Models\ModelAuto1;
use App\Models\ModelAuto2;
use App\Models\ModelAuto3;
use App\Models\ModelHry;
use App\Models\ModelSerialy;
use App\Models\ModelTypy;

use Exception;
use Illuminate\Http\Request;

class PageController extends Controller // PageController dědí od Controller
{
    /*
     * Načítá všechna auta z tabulky spojené s modelem ModelAuto1 a předává je do Blade šablony auta1
     * Načítá všechna auta pomocí ModelAuto1::all(), což znamená, že všechny záznamy v tabulce auta jsou vráceny jako kolekce (list/pole)
     * returnem vrací data pod názvem poleAuta do šablony auta1
    */
    public function ukazIndex()
    {
        $poleAuta = ModelAuto1::all();
        return view('auta1', ["poleAuta" => $poleAuta]);
    }

    public function ukazIndex2()
    {
        $poleAuta2 = ModelAuto2::all();
        return view('auta2', ["poleAuta2" => $poleAuta2]);
    }

    public function ukazIndex3()
    {
        $poleAuta3 = ModelAuto3::all();
        return view('auta3', ["poleAuta3" => $poleAuta3]);
    }

    public function ukazIndex4()
    {
        $poleHry = ModelHry::all();
        return view('hry', ["poleHry" => $poleHry]);
    }

    public function ukazIndex5()
    {
        $poleSerialy = ModelSerialy::all();
        return view('serialy', ["poleSerialy" => $poleSerialy]);
    }
    
}
