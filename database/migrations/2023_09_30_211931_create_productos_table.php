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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',12)->unique();
            $table->string('descripcion');
            $table->string('formaFarmaceutica');
            $table->string('unidadFarmaceutica');
            $table->enum('cantidad', ['g','mg','l','ml','mg/ml','gotas']);
            $table->string('invima')->nullable();
            $table->string('lote')->nullable();
            $table->text('indicaciones')->nullable();
            $table->text('contraindicaciones')->nullable();
            $table->string('fechaVencimiento')->nullable();
            $table->unsignedBigInteger('proveedor_id');
            $table->unsignedBigInteger('laboratorio_id');
            $table->unsignedBigInteger('presentacion_id');
            $table->unsignedBigInteger('viaadministracion_id');
            $table->unsignedBigInteger('tipomedicamento_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
