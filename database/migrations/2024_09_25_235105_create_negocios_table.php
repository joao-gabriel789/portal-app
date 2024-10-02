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
        Schema::create('negocios', function (Blueprint $table) {
            $table->id();
            $table->string("nomeFantasia");
            $table->string("contato");
            $table->string("latitude_longitude");
            $table->text("descricao");
            $table->boolean("ativo");
            $table->unsignedBigInteger('id_tipo_negocio');
            $table->foreign('id_tipo_negocio')->references('id')->on('tipo_negocios')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_endereco');
            $table->foreign('id_endereco')->references('id')->on('enderecos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('negocios');
    }
};
