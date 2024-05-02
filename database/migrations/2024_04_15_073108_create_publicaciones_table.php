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
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->text('texto');
            $table->date('fecha');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_rama');
            $table->unsignedBigInteger('id_imagen')->nullable();
            $table->unsignedBigInteger('id_video')->nullable();
            $table->unsignedBigInteger('id_clasificacion')->nullable();
            $table->timestamps();
            
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_rama')->references('id')->on('ramas');
            $table->foreign('id_imagen')->references('id')->on('imagenes')->nullable();
            $table->foreign('id_video')->references('id')->on('videos')->nullable();
            $table->foreign('id_clasificacion')->references('id')->on('clasificaciones')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicaciones');
    }
};
