<?php

namespace Database\Seeders;

use App\Models\ModelVsechnyAuta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorVsechnyAuta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poleVsechnyAuta = [
            ["fixni_ID" => 1, "jmeno" => "Blesk McQueen", "typ" => "typ1", "zavodnik" => true, "pocet_poharu" => 50, "info_o_autu" => "blesk info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["fixni_ID" => 2, "jmeno" => "Burák Příjmení", "typ" => "typ2", "zavodnik" => false, "pocet_poharu" => 0,"info_o_autu" => "Burák info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["fixni_ID" => 3, "jmeno" => "Sally Carrera", "typ" => "typ3", "zavodnik" => false, "pocet_poharu" => 0,"info_o_autu" => "Sally Carrera info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["fixni_ID" => 4, "jmeno" => "Doktor Hudson", "typ" => "typ4", "zavodnik" => false, "pocet_poharu" => 0, "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
        ];

        foreach ($poleVsechnyAuta as $a) {
            ModelVsechnyAuta::insert([
                "fixni_ID" => $a["fixni_ID"],
                "jmeno" => $a["jmeno"],
                "typ" => $a["typ"],
                "zavodnik" => $a["zavodnik"],
                "pocet_poharu" => $a["pocet_poharu"],
                "info_o_autu" => $a["info_o_autu"],
                "auta1" => $a["auta1"],
                "auta2" => $a["auta2"],
                "auta3" => $a["auta3"],
                "serialy" => $a["serialy"],
                "hry" => $a["hry"],
            ]);
        }
    }
}
