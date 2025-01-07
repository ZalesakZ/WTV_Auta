<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Typ;
use Exception;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ukazIndex()
    {
        $auta = Auto::all();
        return view('auta1', ["auuta" => $auta]);

        $auta = Auto::all();
        return view('carModel', ["auuta" => $auta]);
    }
    
}
