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
        Schema::create('tb_encargados', function (Blueprint $table) {
            $table->increments('Id_encargado_pk'); 
            $table->primary('Id_encargado_pk');
            $table->string('Nombre', 150);
            $table->string('Ap_paterno', 150);
            $table->string('Ap_materno', 150);
            $table->integer('Id_usuario_fk')->unsigned();
            $table->foreign('Id_usuario_fk')->references('Id_usuario_pk')->on('tb_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_encargados');
    }
};
