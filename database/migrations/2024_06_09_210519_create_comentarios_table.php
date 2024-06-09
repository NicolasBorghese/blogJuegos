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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('idComentario');
            $table->unsignedBigInteger('idUser');
            $table->unsignedBigInteger('idPost');
            $table->text('contenidoComentario');
            $table->boolean('habilitado')->default(true);
            $table->timestamps();

            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idPost')->references('idPost')->on('posts')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
