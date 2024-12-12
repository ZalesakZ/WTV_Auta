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
        Schema::create('auto', function (Blueprint $table) {
            $table->id();
            $table->string('jmeno')->unique();
            $table->string('barva', 10);
            $table->unsignedBigInteger('typ');
            $table->boolean('zavodnik')->default(false);
            $table->integer('pocet_poharu');
            $table->string('historie')->nullable();
            $table->unsignedBigInteger('objeveni');

            $table->timestamps();

            // Foreign keys
            $table->foreign('typ')->references('id')->on('typy')->onDelete('cascade');
            $table->foreign('objeveni')->references('id')->on('filmy_hry_serialy')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto');
    }
};
