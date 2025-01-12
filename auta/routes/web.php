<?php
// V souboru web.php se nacházejí definice rout (cest) pro aplikaci, které určují, jaké URL adresy budou mapovány na konkrétní funkce v kontrolerech nebo na views 

use App\Http\Controllers\PageController;
use App\Models\ModelAuto1;
use App\Models\ModelAuto2;
use App\Models\ModelAuto3;
use App\Models\ModelHry;
use App\Models\ModelSerialy;
use App\Models\ModelVsechnyAuta;

use Illuminate\Support\Facades\Route;

/*
 * Tyto routy vedou na různé URL cesty → /auta1, /auta2, /auta3, /hry a /serialy
 * Každá z těchto cest se mapuje na metody v kontroleru PageController
 * Každá routa má definované vlastní jméno (např. auta1.route), které lze využít k snadné generaci URL v aplikaci 
*/
Route::get('/auta1', [PageController::class, 'ukazIndex']) ->name("auta1.route");
Route::get('/auta2', [PageController::class, 'ukazIndex2']) ->name("auta2.route");
Route::get('/auta3', [PageController::class, 'ukazIndex3']) ->name("auta3.route");
Route::get('/hry', [PageController::class, 'ukazIndex4']) ->name("hry.route");
Route::get('/serialy', [PageController::class, 'ukazIndex5']) ->name("serialy.route");
Route::get('/top', [PageController::class, 'topRated'])->name('top1.route');

/*
 * Tato routa přijímá parametr fixni_ID, což je identifikátor konkrétního auta
 * S tímto ID hledáte v databázi auto ve modelu ModelVsechnyAuta
 * Pokud auto s tímto ID nenajdete vrátí null a stránka vrátí chybu 404
 * Pokud auto najdete, zavolá se view carModel, kde je auto předáno do šablony jako poleVsechnyAuta
*/

Route::get("/carModel/{fixni_ID}", function (int $fixni_ID) {

    $poleVsechnyAuta = ModelVsechnyAuta::find($fixni_ID);

    if($poleVsechnyAuta === null)
    {
        return abort(404);
    }


    return view('carModel',["poleVsechnyAuta" => $poleVsechnyAuta]);


})->name("carModel.route");

/*
 * Tyto routy vedou na statické stránky, které používají Blade šablony
 * / → zobrazí pohled welcome
 * /filmy → zobrazí pohled filmy
 * /top → zobrazí pohled top
 * Každá routa má přiřazené jméno, což usnadňuje odkazování v aplikaci
*/
Route::view('/', 'welcome')->name('welcome.route');
Route::view('/filmy', 'filmy')->name('filmy.route');
Route::view('/top', 'top')->name('top.route');

/*
 * Tato routa je chráněná autentizací a ověřením uživatele
 * Uživatel musí být přihlášen a ověřen (pomocí Jetstream), aby mohl přistupovat k těmto stránkám
 * Pokud je uživatel autentizován a ověřen, zobrazí se pohled dashboard
 * Routa má jméno dashboard, což se může použít pro generování odkazu na tuto stránku.
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
