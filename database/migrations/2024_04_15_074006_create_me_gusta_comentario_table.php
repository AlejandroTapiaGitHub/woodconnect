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
        Schema::create('me_gusta_comentarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_comentario');
            $table->date('fecha_meGusta');
            $table->timestamps();
            
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_comentario')->references('id')->on('comentarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('me_gusta_comentarios');
    }
};
