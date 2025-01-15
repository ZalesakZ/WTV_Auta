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
            $table->boolean("zavodnik")->default(false);
            $table->unsignedBigInteger('pocet_poharu')->default(0);
            $table->string('info_o_autu')->nullable();
            $table->boolean("auta1")->default(false);
            $table->boolean("auta2")->default(false);
            $table->boolean("auta3")->default(false);
            $table->boolean("serialy")->default(false);
            $table->boolean("hry")->default(false);
            $table->float('average_rating')->default(0);

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
