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
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->string('num_item');
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('cargo_empleado_id');
            $table->timestamps();
    
            $table->foreign('empleado_id')->references('id')->on('empleado');
            $table->foreign('cargo_empleado_id')->references('id')->on('cargo_empleado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
};
