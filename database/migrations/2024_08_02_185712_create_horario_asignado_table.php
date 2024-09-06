<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_asignado', function (Blueprint $table) {
            $table->id();
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('turno_id');
            $table->timestamps();
    
            $table->foreign('empleado_id')->references('id')->on('empleado');
            $table->foreign('turno_id')->references('id')->on('turno_trabajo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horario_asignado');
    }
};
