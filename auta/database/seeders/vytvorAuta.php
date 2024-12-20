<?php

namespace Database\Seeders;

use App\Models\Auto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorAuta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //"nazev", "druh"
        $auta = [
            ["name" => "Blesk McQueen", "type" => 2, "zavodnik" => "ano", "pocet_poharu" => 50, "historie" => "blesk info", "auta1" => "ano", "auta2" => "ano", "auta3" => "ano", "serialy" => "ano", "hry" => "ano" ],
            ["name" => "Burák", "type" => 1, "zavodnik" => "ne", "pocet_poharu" => 0,"historie" => "Burák info", "auta1" => "ano", "auta2" => "ano", "auta3" => "ano", "serialy" => "ano", "hry" => "ano" ],
            ["name" => "Sally Carrera", "type" => 1, "zavodnik" => "ne", "pocet_poharu" => 0,"historie" => "Sally Carrera info", "auta1" => "ano", "auta2" => "ne", "auta3" => "ne", "serialy" => "ne", "hry" => "ne" ],
            ["name" => "Doktor Hudson", "type" => 1, "zavodnik" => "ne", "pocet_poharu" => 0, "historie" => "Doktor Hudson info", "auta1" => "ano", "auta2" => "ne", "auta3" => "ano", "serialy" => "ne", "hry" => "ano" ],
        ];

        foreach ($auta as $a) {
            Auto::insert([
                "jmeno" => $a["name"],
                "typ" => $a["type"],
                "zavodnik" => $a["zavodnik"],
                "pocet_poharu" => $a["pocet_poharu"],
                "historie" => $a["historie"],
                "auta1" => $a["auta1"],
                "auta2" => $a["auta2"],
                "auta3" => $a["auta3"],
                "serialy" => $a["serialy"],
                "hry" => $a["hry"],
            ]);
        }
    }
}
