<?php

namespace Database\Seeders;

use App\Models\ModelSerialy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorSerialy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poleSerialy = [
            ["name" => "Blesk McQueen", "type" => 2, "zavodnik" => "ano", "pocet_poharu" => 50, "historie" => "blesk info", "auta1" => true, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["name" => "Burák", "type" => 1, "zavodnik" => "ne", "pocet_poharu" => 0,"historie" => "Burák info", "auta1" => true, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["name" => "Sally Carrera", "type" => 1, "zavodnik" => "ne", "pocet_poharu" => 0,"historie" => "Sally Carrera info", "auta1" => true, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => true ],
            ["name" => "Doktor Hudson", "type" => 1, "zavodnik" => "ne", "pocet_poharu" => 0, "historie" => "Doktor Hudson info", "auta1" => true, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => true ],
        ];

        foreach ($poleSerialy as $a) {
            ModelSerialy::insert([
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
