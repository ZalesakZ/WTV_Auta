<?php

namespace Database\Seeders;

use App\Models\ModelHry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vytvorHry extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poleHry = [
            ["fixni_ID" => 1],
            ["fixni_ID" => 2],
            ["fixni_ID" => 3],
            ["fixni_ID" => 5],
            ["fixni_ID" => 4],
            ["fixni_ID" => 6],
            ["fixni_ID" => 7],
            ["fixni_ID" => 8],
            ["fixni_ID" => 9],
            ["fixni_ID" => 10],
            ["fixni_ID" => 13],
            ["fixni_ID" => 14],
            ["fixni_ID" => 15],
            ["fixni_ID" => 16],
        ];

        foreach ($poleHry as $a) {
            ModelHry::insert([
                "fixni_ID" => $a["fixni_ID"]
            ]);
        }
    }
}