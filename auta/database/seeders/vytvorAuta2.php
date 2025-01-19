<?php

namespace Database\Seeders;

use App\Models\ModelAuto2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorAuta2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poleAuta2 = [
            ["fixni_ID" => 1],
            ["fixni_ID" => 2],
            ["fixni_ID" => 3],
            ["fixni_ID" => 6],
            ["fixni_ID" => 8],
            ["fixni_ID" => 10],
            ["fixni_ID" => 11],
            ["fixni_ID" => 12],
            ["fixni_ID" => 13],
            ["fixni_ID" => 15],
        ];

        foreach ($poleAuta2 as $a) {
            ModelAuto2::insert([
                "fixni_ID" => $a["fixni_ID"]
            ]);
        }
    }
}