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
        Schema::create('turno_trabajo', function (Blueprint $table) {
            $table->id();
            $table->enum('descripcion', ['mañana', 'tarde', 'noche', 'mañana-tarde', 'tarde-noche', 'mañana-noche']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turno_trabajo');
    }
};
