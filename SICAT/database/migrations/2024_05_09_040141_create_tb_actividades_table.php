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
        Schema::create('tb_actividades', function (Blueprint $table) {
            $table->increments('Id_actividad_pk');
            $table->primary('Id_actividad_pk');
            $table->string('Nombre', 200);
            $table->char('Tipo', 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_actividades');
    }
};
