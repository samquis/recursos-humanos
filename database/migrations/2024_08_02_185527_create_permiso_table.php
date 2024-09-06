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
    Schema::create('permiso', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('empleado_id');
        $table->date('fecha_salida');
        $table->date('fecha_ingreso');
        $table->text('descripcion')->nullable();
        $table->timestamps();

        $table->foreign('empleado_id')->references('id')->on('empleado');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permiso');
    }
};
