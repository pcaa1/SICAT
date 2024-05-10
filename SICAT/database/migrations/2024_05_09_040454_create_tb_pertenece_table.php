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
        Schema::create('tb_pertenece', function (Blueprint $table) {
            $table->increments('Id_pertenece_pk');
            $table->primary('Id_pertenece_pk');
            $table->integer('Horas');
            $table->boolean('Activo');
            $table->integer('Id_asistencia_nsql');
            $table->integer('Id_actividad_fk')->unsigned();
            $table->integer('Id_alumnos_fk')->unsigned();

            $table->foreign('Id_actividad_fk')->references('Id_actividad_pk')->on('tb_actividades');
            $table->foreign('Id_alumnos_fk')->references('Id_alumno_pk')->on('tb_alumnos');
            // Puedes descomentar estas líneas una vez que tengas la tabla tb_asistencias
            // $table->foreign('Id_asistencia_nsql')->references('Id_asistencia_pk')->on('tb_asistencias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pertenece');
    }
};
