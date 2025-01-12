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
            ["fixni_ID" => 4],
        ];

        foreach ($poleHry as $a) {
            ModelHry::insert([
                "fixni_ID" => $a["fixni_ID"]
            ]);
        }
    }
}