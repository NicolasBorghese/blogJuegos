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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('idReview');
            $table->unsignedBigInteger('idPost');
            $table->string('nombreJuego');
            $table->string('resumenReview');
            $table->text('contenidoReview');
            $table->float('puntajeJuego');
            $table->string('generoJuego');
            $table->string('imgCard');
            $table->string('imgPortada');
            $table->timestamps();

            $table->foreign('idPost')->references('idPost')->on('posts')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
