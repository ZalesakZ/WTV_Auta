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
            ["fixni_ID" => 1],
            ["fixni_ID" => 2],
            ["fixni_ID" => 3],
            ["fixni_ID" => 6],
            ["fixni_ID" => 7],
            ["fixni_ID" => 8],
            ["fixni_ID" => 10],
            ["fixni_ID" => 14],
            ["fixni_ID" => 15],
            ["fixni_ID" => 16],
        ];

        foreach ($poleSerialy as $a) {
            ModelSerialy::insert([
                "fixni_ID" => $a["fixni_ID"]
            ]);
        }
    }
}