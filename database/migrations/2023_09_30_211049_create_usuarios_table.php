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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('nit', 20)->unique()->require();
            $table->string('nombre', 40);
            $table->string('apellidos', 40)->nullable();;
            $table->string('genero')->nullable();;
            $table->string('direccion')->nullable();;
            $table->string('telefono',15)->nullable();
            $table->string('empresa')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('departamento')->nullable();
            $table->string('ciudad')->nullable();;
            $table->text('nota')->nullable();
            $table->unsignedBigInteger('TipoUsuario_id')->onDelete()->cascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
