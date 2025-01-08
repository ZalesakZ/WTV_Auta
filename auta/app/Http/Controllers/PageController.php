<?php

namespace App\Http\Controllers;

use App\Models\ModelAuto1;
use App\Models\ModelAuto2;
use App\Models\ModelAuto3;
use App\Models\ModelHry;
use App\Models\ModelSerialy;
use App\Models\ModelTypy;

use Exception;
use Illuminate\Http\Request;

class PageController extends Controller
{
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
