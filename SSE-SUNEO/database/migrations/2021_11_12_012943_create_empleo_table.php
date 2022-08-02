<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleo', function (Blueprint $table) {
            $table->id();
            $table->string('empresa', 200);
            $table->string('puesto_inicial', 200);
            $table->string('puesto_final', 200);
            $table->string('funciones', 400);
            $table->integer('antiguedad');
            $table->enum('unidad_tiempo',['meses','años']);
            $table->string('egresado_matricula',12)->nullable();
            $table->foreign('egresado_matricula')->references('matricula')->on('egresado');
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
        Schema::dropIfExists('empleo');
    }
}
