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
    Schema::create('empleado', function (Blueprint $table) {
        $table->id();
        $table->string('ci', 20)->unique();
        $table->string('nombre');
        $table->string('segundo_nombre')->nullable();
        $table->string('apellido_p');
        $table->string('apellido_m')->nullable();
        $table->date('fecha_nacimiento');
        $table->enum('estado_civil', ['soltero', 'concuvino', 'casado', 'viudo/a']);
        $table->string('telefono', 20)->nullable();
        $table->string('direccion1')->nullable();
        $table->string('direccion2')->nullable();
        $table->string('imagen')->nullable();
        $table->enum('genero', ['masculino', 'femenino', 'otro']);
        $table->unsignedBigInteger('tipo_sangre_id')->nullable();
        $table->unsignedBigInteger('departamento_id')->nullable();
        $table->unsignedBigInteger('distrito_id')->nullable();
        $table->unsignedBigInteger('area_puesto_id')->nullable();
        $table->unsignedBigInteger('cargo_empleado_id')->nullable();
        $table->unsignedBigInteger('nivel_estudio_id')->nullable();
        $table->unsignedBigInteger('especialidad_id')->nullable();
        $table->date('fecha_contratado')->nullable();
        $table->unsignedBigInteger('turno_trabajo_id')->nullable();
        $table->unsignedBigInteger('licencia_conducir_id')->nullable();
        $table->timestamps();

        $table->foreign('tipo_sangre_id')->references('id')->on('tipo_sangre');
        $table->foreign('departamento_id')->references('id')->on('departamento');
        $table->foreign('distrito_id')->references('id')->on('distrito');
        $table->foreign('area_puesto_id')->references('id')->on('area_puesto');
        $table->foreign('cargo_empleado_id')->references('id')->on('cargo_empleado');
        $table->foreign('nivel_estudio_id')->references('id')->on('nivel_estudio');
        $table->foreign('especialidad_id')->references('id')->on('especialidad');
        $table->foreign('turno_trabajo_id')->references('id')->on('turno_trabajo');
        $table->foreign('licencia_conducir_id')->references('id')->on('licencia_conducir');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
};
