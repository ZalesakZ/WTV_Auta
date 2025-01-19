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
            ["fixni_ID" => 1, "jmeno" => "Blesk McQueen", "typ" => "Závodní", "pocet_vyher" => 93, "zavodni_cislo" => 95, "model_auta" => "2006 Handmade One-of-a-kind Race Car", "info_o_autu" => "blesk info", "auta1" => true, "auta2" => true, "auta3" => true, "serialy" => true, "hry" => true],
            ["fixni_ID" => 2, "jmeno" => "Burák", "typ" => "Komický", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "1957 Haulital Hook'em", "info_o_autu" => "Burák info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 3, "jmeno" => "Sally Carrera", "typ" => "Stylový", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "2002 Porsche Carrera (996)", "info_o_autu" => "Sally Carrera info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false ],
            ["fixni_ID" => 4, "jmeno" => "Doktor Hudson", "typ" => "Závodní", "pocet_vyher" => 78, "zavodni_cislo" => 51, "model_auta" => "1951 Hudson Hornet", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 5, "jmeno" => "Frank", "typ" => "Pracovní",  "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "XXL MetroActual Combine", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 6, "jmeno" => "Fillmore", "typ" => "Hippie", "pocet_vyher" => 0,  "zavodni_cislo" => 0, "model_auta" => "1960 Volkswagen Bus","info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 7, "jmeno" => "Chick Hicks", "typ" => "Závodní", "pocet_vyher" => 48, "zavodni_cislo" => 86, "model_auta" => "1979 Shyster Cremlin", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 8, "jmeno" => "Luigi", "typ" => "Mechanik", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "1959 Fiat 500", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 9, "jmeno" => "Elvis", "typ" => "Stylový", "pocet_vyher" => 0, "zavodni_cislo" => 0,  "model_auta" => "Pompadour Camper 1429 C.I. V-8","info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 10, "jmeno" => "Sheriff", "typ" => "Pracovní", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "1949 Mercury Police Cruiser", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],                                        
            ["fixni_ID" => 11, "jmeno" => "Popemobile", "typ" => "Speciální", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "Holy Motors Modified Truck", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 12, "jmeno" => "Papež", "typ" => "Speciální", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "Holy Motors Vatican 7000", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 13, "jmeno" => "Francesco Bernoulli", "typ" => "Závodní", "pocet_vyher" => 27, "zavodni_cislo" => 1, "model_auta" => "2009 Formula FB1 Prototype Racer", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 14, "jmeno" => "Cruz Ramirezová", "typ" => "Závodní", "pocet_vyher" => 46, "zavodni_cislo" => 51, "model_auta" => "2017 CRS Sports Coupe", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 15, "jmeno" => "Guido", "typ" => "Mechanik", "pocet_vyher" => 0, "zavodni_cislo" => 0, "model_auta" => "Alza Tutto Forklift", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],
            ["fixni_ID" => 16, "jmeno" => "Bourák", "typ" => "UFO", "pocet_vyher" => 0, "zavodni_cislo" => 0,  "model_auta" => "UFO", "info_o_autu" => "Doktor Hudson info", "auta1" => false, "auta2" => false, "auta3" => false, "serialy" => true, "hry" => false],


        ];

        foreach ($poleVsechnyAuta as $a) {
            ModelVsechnyAuta::insert([
                "fixni_ID" => $a["fixni_ID"],
                "jmeno" => $a["jmeno"],
                "typ" => $a["typ"],
                "pocet_vyher" => $a["pocet_vyher"],
                "zavodni_cislo" => $a["zavodni_cislo"],
                "model_auta" => $a["model_auta"],
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
