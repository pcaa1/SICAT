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
        Schema::create('tb_encargados_detalle', function (Blueprint $table) {
            $table->integer('Id_encargado_fk')->unsigned();
            $table->integer('Id_horario_fk')->unsigned();
            $table->integer('Id_actividad_fk')->unsigned();

            $table->foreign('Id_encargado_fk')->references('Id_encargado_pk')->on('tb_encargados');
            $table->foreign('Id_horario_fk')->references('Id_horario_pk')->on('tb_horarios');
            $table->foreign('Id_actividad_fk')->references('Id_actividad_pk')->on('tb_actividades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_encargados_detalle');
    }
};
