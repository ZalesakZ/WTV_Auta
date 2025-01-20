<?php

namespace App\Http\Controllers;

use App\Models\ModelAuto1;
use App\Models\ModelAuto2;
use App\Models\ModelAuto3;
use App\Models\ModelHry;
use App\Models\ModelSerialy;
use App\Models\ModelVsechnyAuta;
use App\Models\Rating;

use Exception;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ukazIndex()
    {
        $poleAuta = ModelAuto1::all();
        return view('auta1_blade', ["poleAuta" => $poleAuta]);
    }

    public function ukazIndex2()
    {
        $poleAuta2 = ModelAuto2::all();
        return view('auta2_blade', ["poleAuta2" => $poleAuta2]);
    }

    public function ukazIndex3()
    {
        $poleAuta3 = ModelAuto3::all();
        return view('auta3_blade', ["poleAuta3" => $poleAuta3]);
    }

    public function ukazIndex4()
    {
        $poleHry = ModelHry::all();
        return view('hry_blade', ["poleHry" => $poleHry]);
    }

    public function ukazIndex5()
    {
        $poleSerialy = ModelSerialy::all();
        return view('serialy_blade', ["poleSerialy" => $poleSerialy]);
    }   

    public function ukazIndex6()
    {
        $poleVsechnyAuta = ModelVsechnyAuta::all();
        return view('welcome_blade', ["poleVsechnyAuta" => $poleVsechnyAuta]);
    }   

    public function topRated()
    {
        $topCars = ModelVsechnyAuta::with('ratings')
            ->select('fixni_ID', 'jmeno')
            ->join('ratings', 'fixni_ID', '=', 'ratings.product_id')
            ->groupBy('fixni_ID', 'product_id', 'jmeno')
            ->selectRaw('AVG(ratings.rating) as average_rating')
            ->orderByDesc('average_rating')
            ->orderBy('jmeno')
            ->take(3)
            ->get();

        return view('top_blade', compact('topCars'));
    }
}
