<?php

use App\Http\Controllers\PageController;
use App\Models\ModelAuto1;
use App\Models\ModelAuto2;
use App\Models\ModelAuto3;
use App\Models\ModelHry;
use App\Models\ModelSerialy;
use App\Models\ModelVsechnyAuta;

use Illuminate\Support\Facades\Route;

Route::get('/auta1', [PageController::class, 'ukazIndex']) ->name("auta1_blade.route");
Route::get('/auta2', [PageController::class, 'ukazIndex2']) ->name("auta2_blade.route");
Route::get('/auta3', [PageController::class, 'ukazIndex3']) ->name("auta3_blade.route");
Route::get('/hry', [PageController::class, 'ukazIndex4']) ->name("hry_blade.route");
Route::get('/serialy', [PageController::class, 'ukazIndex5']) ->name("serialy_blade.route");
Route::get('/', [PageController::class, 'ukazIndex6']) ->name("welcome_blade.route");
Route::get('/top', [PageController::class, 'topRated']) ->name('top_blade.route');

Route::get("/carModel_blade/{fixni_ID}", function (int $fixni_ID) {
    $poleVsechnyAuta = ModelVsechnyAuta::find($fixni_ID);
    if($poleVsechnyAuta === null)
    {
        return abort(404);
    }
    return view('carModel_blade',["poleVsechnyAuta" => $poleVsechnyAuta]);
})->name("carModel_blade.route");

Route::view('/filmy', 'filmy_blade')->name('filmy_blade.route');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
