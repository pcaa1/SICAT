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
        Schema::create('tb_carreras', function (Blueprint $table) {
            $table->increments('Id_carrera_pk');
            $table->primary('Id_carrera_pk');
            $table->string('Nombre', 300);
            $table->char('Clave', 20);
            $table->char('Nombre_corto', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_carreras');
    }
};
