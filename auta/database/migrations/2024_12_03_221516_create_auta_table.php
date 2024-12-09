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
        Schema::create('auta', function (Blueprint $table) {
            $table->id();
            $table->string("jmeno")->unique();
            $table->unsignedBigInteger("druh");
            $table->tinyText("popis")->nullable();
            $table->timestamps();

            $table->foreign("druh")->on("types")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auta');
    }
};
