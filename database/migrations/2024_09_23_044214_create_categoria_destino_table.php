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
        Schema::create('categoria_destino', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('destino_id');
            $table->foreign('categoria_id')->references('id')->on('categorias_destino')->onDelete('cascade');
            $table->foreign('destino_id')->references('id')->on('destinos')->onDelete('cascade');
            $table->primary(['categoria_id', 'destino_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_destino');
    }
};
