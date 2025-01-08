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
        return view('auta1', ["auta" => $auta]);
    }

    public function ukazIndex2()
    {
        $auta = Auto::all();
        return view('auta2', ["auta" => $auta]);
    }
    
}
