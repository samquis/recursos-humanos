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
        Schema::create('cargo_empleado', function (Blueprint $table) {
            $table->id();
            $table->string('cargo');
            $table->unsignedBigInteger('area_puesto_id');
            $table->timestamps();
    
            $table->foreign('area_puesto_id')->references('id')->on('area_puesto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargo_empleado');
    }
};
