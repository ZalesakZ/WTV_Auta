<?php

namespace Database\Seeders;

use App\Models\ModelAuto1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorAuta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poleAuta = [
            ["jmeno" => "Blesk McQueen", "typ" => "typ1", "zavodnik" => true, "pocet_poharu" => 50, "historie" => "blesk info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["jmeno" => "Burák Příjmení", "typ" => "typ2", "zavodnik" => false, "pocet_poharu" => 0,"historie" => "Burák info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["jmeno" => "Sally Carrera", "typ" => "typ3", "zavodnik" => false, "pocet_poharu" => 0,"historie" => "Sally Carrera info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["jmeno" => "Doktor Hudson", "typ" => "typ4", "zavodnik" => false, "pocet_poharu" => 0, "historie" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
        ];

        foreach ($poleAuta as $a) {
            ModelAuto1::insert([
                "jmeno" => $a["jmeno"],
                "typ" => $a["typ"],
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
