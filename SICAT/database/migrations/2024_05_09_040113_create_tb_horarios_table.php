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
        Schema::create('tb_horarios', function (Blueprint $table) {
            $table->increments('Id_horario_pk');
            $table->primary('Id_horario_pk');
            $table->string('Dia', 15);
            $table->time('Hora_inicio');
            $table->time('Hora_fin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_horarios');
    }
};
