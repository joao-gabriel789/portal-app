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
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->text('texto');
            $table->unsignedBigInteger('id_autor');
            $table->foreign('id_autor')->references('id')->on('cadernos')->onDelete('cascade')->onUpdate('cascate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
