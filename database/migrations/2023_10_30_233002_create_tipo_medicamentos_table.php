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
        Schema::create('tipo_medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipoMedicamento')->unique();
            $table->string('descripcion')->nullable('No Existe Observación');
            $table->string('imagen')->nullable('Ninguna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_medicamentos');
    }
};
