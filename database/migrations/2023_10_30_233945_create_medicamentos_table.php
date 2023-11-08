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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('barCode');
            $table->string('NombreComercial')->nullable('no definido');
            $table->string('nombreGenerico')->nullable('no definido');
            $table->string('composicion')->nullable('no definido');
            $table->string('ComponenteActivo')->nullable('no definido');
            $table->string('contenido');
            $table->string('regInvima');
            $table->enum('tipoVenta',['Venta Libre', 'Venta con formula medica']);
            $table->string('contraIndicaciones')->nullable('ninguna');
            $table->string('observaciones')->nullable('ninguna');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('tipoMedicamento_id');
            $table->unsignedBigInteger('presentacioMedicamento_id');
            $table->unsignedBigInteger('viaAministracion_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('tipoMedicamento_id')->references('id')->on('tipo_medicamentos');
            $table->foreign('presentacioMedicamento_id')->references('id')->on('presentacion_medicamentos');
            $table->foreign('viaAministracion_id')->references('id')->on('via_administracions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
