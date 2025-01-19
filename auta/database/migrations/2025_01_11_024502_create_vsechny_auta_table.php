<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vsechny_auta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fixni_ID')->unique();
            $table->string('jmeno');
            $table->string('typ');
            $table->unsignedBigInteger('pocet_vyher')->default(0);
            $table->unsignedBigInteger('zavodni_cislo')->default(0);
            $table->string('model_auta');
            $table->string('dabing_EN');
            $table->string('dabing_CZ');
            $table->boolean('auta1')->default(false);
            $table->boolean('auta2')->default(false);
            $table->boolean('auta3')->default(false);
            $table->boolean('serialy')->default(false);
            $table->boolean('hry')->default(false);
            $table->longText('info_o_autu');

            $table->timestamps();

            // Foreign keys
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vsechny_auta');
    }
};
