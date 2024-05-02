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
        Schema::create('tags_publicaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_publicacion');
            $table->unsignedBigInteger('id_tag');
            $table->timestamps();

            $table->foreign('id_publicacion')->references('id')->on('publicaciones');
            $table->foreign('id_tag')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags_publicaciones');
    }
};
