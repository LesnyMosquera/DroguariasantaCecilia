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
        Schema::create('presentacion_medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('presentacion')->unique();
            $table->text('descripcion')->nullable('No Existe Observación');
            $table->string('imagen')->nullable('Ninguna');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presentacion_medicamentos');
    }
};
