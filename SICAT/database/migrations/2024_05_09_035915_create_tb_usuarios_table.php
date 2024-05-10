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
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->increments('Id_usuario_pk');
            $table->primary('Id_usuario_pk');
            $table->string('Nombre', 50);
            $table->string('Contrasena', 50);
            $table->integer('Tipo');
            $table->text('Cadena_qr');
            $table->text('Imagen_qr');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_usuarios');
    }
};
