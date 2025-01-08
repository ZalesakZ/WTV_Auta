<?php

use App\Http\Controllers\PageController;
use App\Models\Auto;
use App\Models\Typ;
use Illuminate\Support\Facades\Route;

Route::get('/auta1', [PageController::class, 'ukazIndex']) ->name("auta1.route");
Route::get('/auta2', [PageController::class, 'ukazIndex2']) ->name("auta2.route");

Route::get("/carModel/{id}", function (int $id) {

    $auta = Auto::find($id);

    if($auta === null)
    {
        return abort(404);
    }

    //$typ = Typ::find($pokemon->druh);


    return view('carModel',["auto" => $auta/*, 'typ' => $typ*/]);
    return view('auta1',["auto" => $auta/*, 'typ' => $typ*/]);
    return view('auta2',["auto" => $auta/*, 'typ' => $typ*/]);

})->name("carModel");



Route::get('/', function () {
    return view('welcome');
})->name('welcome.route');

/*
Route::get('/auta1', function () {
    return view('auta1');
})->name('auta1.route');
*/
Route::view('/auta2', 'auta2')->name('auta2.route');
Route::view('/auta3', 'auta3')->name('auta3.route');
Route::view('/carModel', 'carModel')->name('carModel.route');
Route::view('/hry', 'hry')->name('hry.route');
Route::view('/serialy', 'serialy')->name('serialy.route');
Route::view('/top', 'top')->name('top.route');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
