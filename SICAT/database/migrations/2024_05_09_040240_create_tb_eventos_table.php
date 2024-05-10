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
        Schema::create('tb_eventos', function (Blueprint $table) {
            $table->increments('Id_evento_pk');
            $table->primary('Id_evento_pk');
            $table->string('Nombre', 300);
            $table->string('Lugar', 300);
            $table->date('Fecha');
            $table->time('Hora');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_eventos');
    }
};
