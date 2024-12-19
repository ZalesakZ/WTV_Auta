<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Typ;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ukazIndex()
    {
        $auta = Auto::all();
        return view('welcome',["auuta" => $auta]);
    }
}
