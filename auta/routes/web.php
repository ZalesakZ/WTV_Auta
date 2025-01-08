<?php

use App\Http\Controllers\PageController;
use App\Models\ModelAuto1;
use App\Models\ModelAuto2;
use App\Models\ModelAuto3;
use App\Models\ModelHry;
use App\Models\ModelSerialy;
use App\Models\ModelTypy;

use Illuminate\Support\Facades\Route;

Route::get('/auta1', [PageController::class, 'ukazIndex']) ->name("auta1.route");
Route::get('/auta2', [PageController::class, 'ukazIndex2']) ->name("auta2.route");
Route::get('/auta3', [PageController::class, 'ukazIndex3']) ->name("auta3.route");
Route::get('/hry', [PageController::class, 'ukazIndex4']) ->name("hry.route");
Route::get('/serialy', [PageController::class, 'ukazIndex5']) ->name("serialy.route");

Route::get("/carModel/{id}", function (int $id) {

    $poleAuta = ModelAuto1::find($id);

    if($poleAuta === null)
    {
        return abort(404);
    }


    return view('carModel',["poleAuta" => $poleAuta]);


})->name("carModel");


Route::get('/', function () {
    return view('welcome');
})->name('welcome.route');


Route::view('/carModel', 'carModel')->name('carModel.route');
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
