<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidad', function (Blueprint $table) {
            $table->id();
            $table->string('habilidad',45);
            $table->tinyInteger('demostrada');
            $table->unsignedBigInteger('empleado_id');
            $table->foreign('empleado_id')->references('id')->on('empleado');
            $table->unsignedBigInteger('catalogoHabilidad_id');
            $table->foreign('catalogoHabilidad_id')->references('id')->on('catalogohabilidad');
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
        Schema::dropIfExists('habilidad');
    }
}
