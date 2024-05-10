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
        Schema::create('tb_participa', function (Blueprint $table) {
            $table->increments('Id_participa_pk');
            $table->primary('Id_participa_pk');
            $table->integer('Id_alumno_fk')->unsigned();
            $table->integer('Id_evento_fk')->unsigned();

            $table->foreign('Id_alumno_fk')->references('Id_alumno_pk')->on('tb_alumnos');
            $table->foreign('Id_evento_fk')->references('Id_evento_pk')->on('tb_eventos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_participa');
    }
};
