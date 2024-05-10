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
        Schema::create('tb_alumnos', function (Blueprint $table) {
            $table->increments('Id_alumno_pk');
            $table->primary('Id_alumno_pk');
            $table->char('Num_control', 10);
            $table->string('Nombre', 150);
            $table->string('Ap_paterno', 150);
            $table->string('Ap_materno', 150);
            $table->char('Sexo', 1);
            $table->date('Fecha_nac');
            $table->integer('Semestre');
            $table->integer('Nivel');
            $table->text('Foto')->nullable();
            $table->integer('Id_carrera_fk')->unsigned();

            $table->foreign('Id_carrera_fk')->references('Id_carrera_pk')->on('tb_carreras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_alumnos');
    }
};
